<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'sale_price',
        'discounted_price',
        'total_rating',
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

    protected function bannerImageUrl(): Attribute
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

    protected function discountedPrice(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->price - $this->sale_price,
        );
    }

    protected function totalRating(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                $book_reviews = $this->book_reviews->where('is_active', 1);
                if (count($book_reviews) == 0) {
                    return 0;
                }
                $rating = $book_reviews->sum('rating');
                return round($rating / count($book_reviews), 1);
            }
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

    public function book_reviews(): HasMany
    {
        return $this->hasMany(BookReview::class);
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
