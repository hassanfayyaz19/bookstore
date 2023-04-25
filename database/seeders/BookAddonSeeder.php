<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookAddon;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class BookAddonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::select('id')->get();
        $addons = [];
        foreach ($books as $book) {
            $addons[] = [
                'name' => 'Audio Book',
                'description' => 'Listen to the book instead of reading it.',
                'price' => 5.99,
                'url' => 'assets/media/dummy/audio.mp3',
                'book_id' => $book->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $addons[] = [
                'name' => 'Video Guide',
                'description' => 'Get a visual guide to help you understand the book better.',
                'price' => 9.99,
                'url' => 'assets/media/dummy/video.mp4',
                'book_id' => $book->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

        }

        BookAddon::insert($addons);
    }
}
