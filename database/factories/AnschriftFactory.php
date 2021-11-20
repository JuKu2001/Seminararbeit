<?php

namespace Database\Factories;

use App\Models\Lehrer;
use App\Models\Anschrift;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnschriftFactory extends Factory
{
    //Quelle: https://laravel.com/docs/8.x/database-testing#defining-model-factories
    
    //Hier muss noch das korrespondierende Model definiert werden, um die Beziehung Dummy <-> Model herzustellen
    protected $model = Anschrift::class;

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
            //Hier wird der FK des Lehrers angegeben, sonst gibt es keinen Bezug zum Lehrer
            //Überlicherweise wird hier eine Factory Klasse dafür erstellt
            'lehrer_id' => Lehrer::factory(),
        ];
    }
}