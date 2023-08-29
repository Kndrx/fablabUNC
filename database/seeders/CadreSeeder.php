<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CadreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('cadre')->insert([
                [
                    'id' => 1,
                    'raison' => 'TP'
                ],
                [
                    'id' => 2,
                    'raison' => 'Cours'
                ],
                [
                    'id' => 3,
                    'raison' => 'Personnel'
                ],
                [
                    'id' => 4,
                    'raison' => 'Atelier'
                ],
                [
                    'id' => 5,
                    'raison' => 'Autre'
                ],
            ]);
    }
}