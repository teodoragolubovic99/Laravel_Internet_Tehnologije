<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistributerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'adresa' => $this->faker->streetAddress(),
            'grad' => $this->faker->city()
        ];
    }
}
