<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}



/*use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

factory->define(Lehrer::class, function (Faker $faker) {                // erzeugt Dummy-Datensätze für die Relation Lehrer

    return[
        'kürzel' => Str::random(rand(2)),
        'name' => $faker->name,
        //'fächer' => $faker->name
    ];
});



factory->define(App\Klasse::class, function (Faker $faker) {            // erzeugt Dummy-Datensätze für die Relation Klasse

    return[
        'klassenbezeichnung' => Str::random(rand(2)),
        'klassenraum' => mt_Rand(100,999),
    ];
});




factory->define(App\Schueler::class, function (Faker $faker) {          // erzeugt Dummy-Datensätze für die Relation Schueler

    return[
        'e-mail' => $faker->unique()->safeEmail,
        'name' => $faker->name,
        'telefonnummer' => mt_Rand(1000000,9999999),
    ];
});



factory->define(App\Anschrift::class, function (Faker $faker) {         // erzeugt Dummy-Datensätze für die Relation Anschrift

    return[
        'ort' => mt_Rand(10000,99999),
        //'straße' => $faker->name,
        'hausnummer' => $mt_Rand(1,100),
    ];
});

*/