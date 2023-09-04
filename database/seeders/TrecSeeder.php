<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TrecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('trec')->insert([
                [
                    'id' => 1,
                    'trec' => 'TREC 5'
                ],
                [
                    'id' => 2,
                    'trec' => 'TREC 7'
                ],
            ]);
    }
}