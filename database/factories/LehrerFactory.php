<?php

namespace Database\Factories;

use App\Models\Lehrer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LehrerFactory extends Factory
{
    //Quelle: https://laravel.com/docs/8.x/database-testing#defining-model-factories
    
    //Hier wird das korrespondierende Model definiert, um die Beziehung Dummy <-> Model herzustellen
    protected $model = Lehrer::class;

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
            //'anschrift_id' => Anschrift::factory(),
        ];
    }
}    