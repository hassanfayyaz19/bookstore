<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Publisher::truncate();
        Schema::enableForeignKeyConstraints();

        Publisher::insert([
            ['name' => 'John Wiley & Sons, Inc.', 'slug' => str::slug('John Wiley & Sons, Inc.')],
            ['name' => 'Scholastic, Inc.', 'slug' => str::slug('Scholastic, Inc.')],
            ['name' => 'Houghton Mifflin Harcourt', 'slug' => str::slug('Houghton Mifflin Harcourt')],
            ['name' => 'HarperCollins', 'slug' => str::slug('HarperCollins')],
            ['name' => 'Merriam-Webster Inc.', 'slug' => str::slug('Merriam-Webster Inc.')],
            ['name' => 'Pearson', 'slug' => str::slug('Pearson')],
            ['name' => "O'Reilly Media Inc", 'slug' => str::slug("O'Reilly Media Inc")],
            ['name' => 'Lonely Planet Publications', 'slug' => str::slug('Lonely Planet Publications')],
            ['name' => 'Penguin Random House', 'slug' => str::slug('Penguin Random House')],
            ['name' => 'Getty Publications', 'slug' => str::slug('Getty Publications')],
            ['name' => 'Tate Publishing', 'slug' => str::slug('Tate Publishing')],
            ['name' => 'Cambridge University Press', 'slug' => str::slug('Cambridge University Press')],
            ['name' => 'Taschen Books', 'slug' => str::slug('Taschen Books')],
            ['name' => 'American Chemical Society Publications', 'slug' => str::slug('American Chemical Society Publications')],
            ['name' => 'Thomson Reuters', 'slug' => str::slug('Thomson Reuters')],
            ['name' => 'English Heritage', 'slug' => str::slug('English Heritage')],
        ]);
    }
}
