<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('use')->insert([
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
            ]);
    }
}