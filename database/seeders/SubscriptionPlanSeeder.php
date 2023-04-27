<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        SubscriptionPlan::truncate();
        Schema::enableForeignKeyConstraints();
        SubscriptionPlan::insert([
            [
                'name' => 'Basic Plan',
                'slug' => Str::slug('Basic Plan'),
                'price' => 10,
                'interval' => 'month',
                'features' => json_encode([
                    'limited access to books',
                    'audio book subscription',
                    'exclusive content',
                    '10% discounts on books'
                ])
            ],
            [
                'name' => 'Premium Plan',
                'slug' => Str::slug('Premium Plan'),
                'price' => 20,
                'interval' => 'month',
                'features' => json_encode([
                    'unlimited access to books',
                    'audio book subscription',
                    'exclusive content',
                    '20% discounts on books'
                ])
            ]
        ]);
    }
}
