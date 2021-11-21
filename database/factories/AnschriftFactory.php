<?php

namespace Database\Factories;

use App\Models\Lehrer;
use App\Models\Anschrift;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnschriftFactory extends Factory
{
    //Quelle: https://laravel.com/docs/8.x/database-testing#defining-model-factories
    
    //Hier wird das korrespondierende Model definiert, um die Beziehung Dummy <-> Model herzustellen
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
            'lehrer_id' => Lehrer::factory(),
        ];
    }
}


/*  zur Erzeugung von dummys:

    php artisan tinker

    $Anschrift= new App\Models\Anschrift();

    Anschrift::factory()->create();
*/