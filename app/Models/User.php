<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $appends = ['full_name'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class);
    }

    public function user_subscription(): HasMany
    {
        return $this->hasMany(UserSubscription::class);
    }

    public function favourite_books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'favourite_books');
    }

    protected function profile(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value != null ? asset($value) : asset('assets/media/default-profile.png'),
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->first_name . ' ' . $this->last_name,
        );
    }

    public function activeSubscription()
    {
        return $this->user_subscription->where('status', 1)->first();
    }

    public function activeSubscriptionPlan()
    {
        return $this->activeSubscription()->subscription_plan ?? null;
    }

    public function subscription_discount()
    {
        if (!Auth::guard('web')->check()) {
            return null;
        }

        $user = Auth::guard('web')->user();
        $cache_key = 'subscription_discount_' . $user->id;

        $discount = Cache::remember($cache_key, Carbon::now()->addDays(30), function () use ($user) {
            $active_subscription = $user->activeSubscriptionPlan();
            if (!$active_subscription) {
                return null;
            }
            if ($active_subscription->slug == SubscriptionPlan::BASIC_PLAN) {
                return 10;
            } elseif ($active_subscription->slug == SubscriptionPlan::PREMIUM_PLAN) {
                return 20;
            }
            return null;
        });

        return $discount;
    }

    public function clearSubscriptionDiscountCache()
    {
        $user = Auth::guard('web')->user();

        if (!$user) {
            return false;
        }

        $cache_key = 'subscription_discount_' . $user->id;

        Cache::forget($cache_key);
    }
}
