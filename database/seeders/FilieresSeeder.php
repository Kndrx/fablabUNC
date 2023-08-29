<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class FilieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('filieres')->insert([
                [
                    'id' => 1,
                    'filiere' => 'étudiant'
                ],
                [
                    'id' => 2,
                    'filiere' => 'enseignant'
                ],
                [
                    'id' => 3,
                    'filiere' => 'doctorant'
                ],
                [
                    'id' => 4,
                    'filiere' => 'membre du personnel'
                ],
                [
                    'id' => 5,
                    'filiere' => 'autre'
                ],
            ]);
    }
}