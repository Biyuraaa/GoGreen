<?php

namespace Database\Factories;

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
        return [
            'content' => $this->faker->sentence,
            'user_id' => $this->faker->numberBetween(1, 10),
            'blog_id' => $this->faker->numberBetween(1, 20),
            'created_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
