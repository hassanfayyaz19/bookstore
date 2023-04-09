<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    public const STATUS = [
        'Draft',
        'Published',
        'Not Published',
    ];

    protected $guarded = [];

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function (string $value, array $attributes) {
                $attributes['title'] = $value;
                $attributes['slug'] = $this->generateSlug($value);
                return $attributes;
            },
        );
    }

    protected function metaKeywords(): Attribute
    {
        return Attribute::make(
            set: fn($value) => gettype($value) == 'string' ? collect(json_decode($value))->pluck('value') : $value,
        );
    }


    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($value) => asset($value),
        );
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(BlogCategory::class, 'category_blogs');
    }


    public function recommended_books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'blog_recommended_book');
    }


    protected function generateSlug($title, $count = 0)
    {
        $slug = Str::slug($title);

        if ($count > 0) {
            $slug .= '-' . $count;
        }

        $slugExists = static::where('slug', $slug)->exists();

        if ($slugExists) {
            return $this->generateSlug($title, $count + 1);
        }

        return $slug;
    }
}
