<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Klasse;

class KlasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Klasse::create([
            'klassenbezeichnung' => '10D',
            'klassenraum' => '323',
        ]);
    }
}
