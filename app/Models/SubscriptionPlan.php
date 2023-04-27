<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 */
class SubscriptionPlan extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function user_subscriptions(): HasMany
    {
        return $this->hasMany(UserSubscription::class);
    }

    protected function features(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => json_decode($value),
        );
    }
}
