<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory(50)->create();

        $blogs = Blog::all();
        $categories = BlogCategory::all();
        $books = Book::select('id')->get();

        foreach ($blogs as $blog) {

            $randomCategories = $categories->random(2);
            $blog->categories()->attach($randomCategories);

            $random_recommended_books = $books->random(2);
            $blog->recommended_books()->attach($random_recommended_books);
        }
    }
}
