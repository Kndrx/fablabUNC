<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('persons')->insert([
                [
                    'id' => 1,
                    'type' => 'Étudiant'
                ],
                [
                    'id' => 2,
                    'type' => 'Enseignant'
                ],
                [
                    'id' => 3,
                    'type' => 'Doctorant'
                ],
                [
                    'id' => 4,
                    'type' => 'Membre du personnel'
                ],
                [
                    'id' => 5,
                    'type' => 'Autre'
                ],
            ]);
    }
}