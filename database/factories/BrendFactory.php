<?php

namespace Database\Factories;

use App\Models\Distributer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrendFactory extends Factory
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
            'osnivac' => $this->faker->name(),
            'distributer_id' => Distributer::factory(),
        ];
    }
}
