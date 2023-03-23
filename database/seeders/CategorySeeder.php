<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

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
            ['name' => 'Action', 'slug' => str::slug('Action')],
            ['name' => 'Fantasy', 'slug' => str::slug('Fantasy')],
            ['name' => 'Adventure', 'slug' => str::slug('Adventure')],
            ['name' => 'History', 'slug' => str::slug('History')],
            ['name' => 'Animation', 'slug' => str::slug('Animation')],
            ['name' => 'Horror', 'slug' => str::slug('Horror')],
            ['name' => 'Biography', 'slug' => str::slug('Biography')],
            ['name' => 'Mystery', 'slug' => str::slug('Mystery')],
            ['name' => 'Comedy', 'slug' => str::slug('Comedy')],
            ['name' => 'Romance', 'slug' => str::slug('Romance')],
            ['name' => 'Crime', 'slug' => str::slug('Crime')],
            ['name' => 'Sci-fi', 'slug' => str::slug('Sci-fi')],
            ['name' => 'Documentary', 'slug' => str::slug('Documentary')],
            ['name' => 'Sport', 'slug' => str::slug('Sport')],
            ['name' => 'Design', 'slug' => str::slug('Design')],
            ['name' => 'Science', 'slug' => str::slug('Science')],
        ]);
    }
}
