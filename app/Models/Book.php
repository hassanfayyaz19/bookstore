<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

//   Mutators
    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => "$ $value",
        );
    }

    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => asset($value),
        );
    }

    protected function filePath(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => asset($value),
        );
    }

// End  Mutators

// Start  Relations
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'book_categories');
    }
// End  Relations

//start Scope
    public function scopeRecommended($query)
    {
        return $query->where('is_recommended', 1);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
// End  Scope

}
