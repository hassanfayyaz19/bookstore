<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::insert([
            [
                'name' => 'Audio',
                'slug' => 'audio'
            ],
            [
                'name' => 'Beauty',
                'slug' => 'beauty'
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion'
            ],
            [
                'name' => 'Images',
                'slug' => 'images'
            ],
            [
                'name' => 'Life Style',
                'slug' => 'life-style'
            ],
        ]);
    }
}
