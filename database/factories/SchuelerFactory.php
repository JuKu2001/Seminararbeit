<?php

namespace Database\Factories;

use App\Models\Schueler;
use App\Models\Anschrift;
use App\Models\Klasse;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchuelerFactory extends Factory
{
    //Quelle: https://laravel.com/docs/8.x/database-testing#defining-model-factories

    //Hier wird das korrespondierende Model definiert, um die Beziehung Dummy <-> Model herzustellen
    protected $model = Schueler::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            //Hier wird der FK der Klasse und der Anschrift angegeben, sonst gibt es keinen Bezug
            'anschrift_id' => Anschrift::factory(),
            'klasse_id' => Klasse::factory(),
            
        ];
    }
}

/*  zur Erzeugung von dummys:

    php artisan tinker

    $Schueler= new App\Models\Schueler();

    Schueler::factory()->create();
*/