<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
class UserSubscription extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];


    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * @return BelongsTo
     */
    public function subscription_plan(): BelongsTo
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }


    /**
     * @return BelongsTo
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }
}
