<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence;
        return [
            'title' => $title,
            'body' => fake()->paragraphs(5, true),
            'image' => 'assets/media/default-image.png',
            'admin_id' => Admin::inRandomOrder()->first()->id,
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'meta_title' => fake()->sentence,
            'meta_description' => fake()->paragraph,
            'status' => fake()->randomElement(['draft', 'published']),
        ];
    }
}
