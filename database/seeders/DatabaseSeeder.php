<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KlasseSeeder::class);
        $this->call(LehrerSeeder::class);
        $this->call(AnschriftSeeder::class);
        $this->call(SchuelerSeeder::class);
    }
}
