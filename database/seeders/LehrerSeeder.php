<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lehrer;

class LehrerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lehrer::create([
            'name' => 'Müller',
            'kuerzel' => 'dfs',
        ]);
    }
}


