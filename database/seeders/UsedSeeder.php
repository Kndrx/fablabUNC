<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('used')->insert([
                [
                    'id' => 1,
                    'pole' => 'Textile'
                ],
                [
                    'id' => 2,
                    'pole' => 'Fabrication'
                ],
                [
                    'id' => 3,
                    'pole' => 'Electronique'
                ],
                [
                    'id' => 4,
                    'pole' => 'Logiciels'
                ],
                [
                    'id' => 5,
                    'pole' => 'Visite/Divers'
                ],
            ]);
    }
}