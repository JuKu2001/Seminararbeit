<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schueler;

class SchuelerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schueler::create([
            'name' => 'Max',
            'email' => 'max@gmail.com',
            'klasses_id'=>1,
            'anschrifts_id'=>1,
        ]);
    }
}
