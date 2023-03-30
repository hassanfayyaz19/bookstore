<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'author_id' => fake()->numberBetween(1, 10),
            'price' => fake()->numberBetween($min = 1500, $max = 6000),
            'publisher_id' => fake()->numberBetween(1, 10),
            'publication_date' => fake()->date(),
            'language' => fake()->randomElement(['english', 'spanish', 'french', 'hindi', 'urdu', 'korean', 'japanese']),
            'page_count' => fake()->numberBetween($min = 10, $max = 6000),
            'description' => fake()->paragraphs(10, true),
            'image_url' => fake()->imageUrl(),
            'file_path' => 'sample.pdf',
        ];
    }
}
