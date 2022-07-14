<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->word(),
            'excerpt' => $this->faker->text(80),
            'body' => $this->faker->text(1000),
            'publish_at' => now(),
        ];
    }
}