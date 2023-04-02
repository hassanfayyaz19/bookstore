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

    protected $appends = [
        'sale_price'
    ];

//   Mutators
    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => $value,
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

    protected function salePrice(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->price - ($this->price * ($this->discount_percentage / 100)),
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

    public function scopeBanner($query)
    {
        return $query->where('is_banner', 1);
    }

    public function scopeOnSale($query)
    {
        return $query->where('is_on_sale', 1);
    }
// End  Scope

}
