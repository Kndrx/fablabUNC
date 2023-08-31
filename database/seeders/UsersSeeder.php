<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                [
                    'id' => 1,
                    'username' => 'admin',
                    'password' => Hash::make('fablab2023'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]);
    }
}