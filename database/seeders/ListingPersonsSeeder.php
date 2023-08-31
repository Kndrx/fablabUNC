<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ListingPersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('listingPersons')->insert([
                [
                    'id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'type' => 'étudiant',
                    'service' => null,
                    'filiere' => 'Licence Info',
                    'TREC' => 'Trec 5',
                    'raison' => 'TP',
                    'pole' => 'Fabrication',
                ],
                [
                    'id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'type' => 'Membre du personnel',
                    'service' => 'DGS',
                    'filiere' => null,
                    'TREC' => null,
                    'raison' => 'Personnel',
                    'pole' => 'Textile',
                ],
            ]);
    }
}