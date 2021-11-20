<?php

namespace Database\Factories;

use App\Models\Klasse;
use Illuminate\Database\Eloquent\Factories\Factory;

class KlasseFactory extends Factory
{
    //Quelle: https://laravel.com/docs/8.x/database-testing#defining-model-factories
    
    //Hier wird das korrespondierende Model definiert werden, um die Beziehung Dummy <-> Model herzustellen
    protected $model = Klasse::class;

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