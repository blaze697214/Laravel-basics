<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-3 years', '-1 week');
        return [
            'title' => fake()->realTextBetween(10,20),
            'content' => fake()->realTextBetween(500,1000),
            'created_at' => $date,
            'updated_at' => $date,
            'views' => $this->faker->numberBetween(0,100), // __ONE_TO_MANY__
            'likes' => $this->faker->numberBetween(0,20),
            'dislikes' => $this->faker->numberBetween(0,20),
            'metadata' => ['author' => 'John Doe', 'tags' => ['laravel 12', 'php 8']]
        ];
    }
}
