<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Author::factory(10)->create();
        \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
            BookAddonSeeder::class,
            BookCategorySeeder::class,
            BannerBookSeeder::class,
            RecommendedBookSeeder::class,
            BookOnSaleSeeder::class,
            FeaturedBookSeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class,
            CommentSeeder::class,
            SubscriptionPlanSeeder::class,
        ]);
    }
}
