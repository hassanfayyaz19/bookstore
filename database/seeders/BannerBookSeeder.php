<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BannerBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::all();
        $book_ids = $books->random(3)->pluck('id')->toArray();

        Book::whereIn('id', $book_ids)->update(['is_banner' => 1]);
    }
}
