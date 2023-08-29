<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application Database
     * 
     * @return void
     */

     public function run()
     {
        $this->call([
            PersonsSeeder::class,
            UseSeeder::class,
            CadreSeeder::class,
            ServicesSeeder::class,
            FilieresSeeder::class,
        ]);
     }
}