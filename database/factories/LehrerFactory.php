<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LehrerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'kuerzel' => $this->faker->regexify('[A-Z]{2}'),
            //'anschrift_id' =>AnschriftFactory::class(Anschrift::class)->create()->getKey(),
        ];
    }
}    