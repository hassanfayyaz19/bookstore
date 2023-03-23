<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        Schema::enableForeignKeyConstraints();

        Category::insert([
            ['name' => 'Action'],
            ['name' => 'Fantasy'],
            ['name' => 'Adventure'],
            ['name' => 'History'],
            ['name' => 'Animation'],
            ['name' => 'Horror'],
            ['name' => 'Biography'],
            ['name' => 'Mystery'],
            ['name' => 'Comedy'],
            ['name' => 'Romance'],
            ['name' => 'Crime'],
            ['name' => 'Sci-fi'],
            ['name' => 'Documentary'],
            ['name' => 'Sport'],
            ['name' => 'Design'],
            ['name' => 'Science'],
        ]);
    }
}
