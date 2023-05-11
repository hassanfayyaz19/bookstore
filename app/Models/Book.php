<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'sale_price',
        'discounted_price',
        'total_rating',
//        'subscription_discount_price'
    ];

//   Mutators
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

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => round($value, 2),
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

//    protected function salePrice(): Attribute
//    {
//        return Attribute::make(
//            get: fn() => round($this->price - ($this->price * ($this->discount_percentage / 100)), 2),
//        );
//    }

    protected function discountedPrice(): Attribute
    {
        return Attribute::make(
            get: fn() => round($this->price - $this->sale_price, 2),
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

    protected function salePrice(): Attribute
    {
        return Attribute::make(
            get: function () {
               return $sale_price = round($this->price - ($this->price * ($this->discount_percentage / 100)), 2);
                if (!Auth::guard('web')->check()) {
                    return $sale_price;
                }

                $subscription_discount = Auth::guard('web')->user()->subscription_discount();

                if (!$subscription_discount) {
                    return $sale_price;
                }

                return round($sale_price - ($sale_price * ($subscription_discount / 100)), 2);
            },
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

    public function book_addons()
    {
        return $this->hasMany(BookAddon::class);
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
