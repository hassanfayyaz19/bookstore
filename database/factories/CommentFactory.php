<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $blog = Blog::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        return [
            'blog_id' => $blog->id,
            'parent_id' => null,
            'user_id' => $user->id,
            'content' => $this->faker->paragraph(),
        ];
    }


}
