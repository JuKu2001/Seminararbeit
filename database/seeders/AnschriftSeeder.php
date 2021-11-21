<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anschrift;

class AnschriftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anschrift::create([
    
            'strasse' => 'Beipielstrasse',
            'hausnummer' => '43',
            'lehrers_id'=>1,
        ]);
    }
}
