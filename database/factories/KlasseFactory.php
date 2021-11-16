<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KlasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'klassenbezeichnung' => $this->faker->regexify('[A-Z]{2}'),
            'klassenraum' => $this->faker->regexify('[A-Z]{3}'),
        ];
    }
}