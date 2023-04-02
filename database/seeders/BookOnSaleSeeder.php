<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookOnSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::all();
        $book_ids = $books->random(8)->pluck('id')->toArray();

        Book::whereIn('id', $book_ids)->update(['is_on_sale' => 1, 'discount_percentage' => 20]);
    }
}
