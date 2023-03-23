<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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
            ['name' => 'John Wiley & Sons, Inc.'],
            ['name' => 'Scholastic, Inc.'],
            ['name' => 'Houghton Mifflin Harcourt'],
            ['name' => 'HarperCollins'],
            ['name' => 'Merriam-Webster Inc.'],
            ['name' => 'Pearson'],
            ['name' => "O'Reilly Media Inc"],
            ['name' => 'Lonely Planet Publications'],
            ['name' => 'Penguin Random House'],
            ['name' => 'Getty Publications'],
            ['name' => 'Tate Publishing'],
            ['name' => 'Cambridge University Press'],
            ['name' => 'Taschen Books'],
            ['name' => 'American Chemical Society Publications'],
            ['name' => 'Thomson Reuters'],
            ['name' => 'English Heritage'],
        ]);
    }
}
