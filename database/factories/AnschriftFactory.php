<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnschriftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'strasse' => $this->faker->name(),
            'hausnummer' => $this->faker->regexify('[A-Z]{2}'),
        ];
    }
}
