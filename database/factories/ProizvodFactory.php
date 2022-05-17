<?php

namespace Database\Factories;

use App\Models\Brend;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->domainWord(),
            'sifra' => $this->faker->unique()->postcode(),
            'velicina' => $this->faker->numberBetween($min = 15, $max = 100),
            'cena' => $this->faker->numberBetween($min = 100, $max = 150000),
            'brend_id' => Brend::factory(),
        ];
    }
}
