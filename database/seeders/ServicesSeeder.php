<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('services')->insert([
                [
                    'id' => 1,
                    'service' => 'Presidence'
                ],
                [
                    'id' => 2,
                    'service' => 'DGS'
                ],
                [
                    'id' => 3,
                    'service' => 'DGSA'
                ],
                [
                    'id' => 4,
                    'service' => 'Service Financier'
                ],
                [
                    'id' => 5,
                    'service' => 'DUNE'
                ],
                [
                    'id' => 6,
                    'service' => 'P2M'
                ],
                [
                    'id' => 7,
                    'service' => 'CRL'
                ],
                [
                    'id' => 8,
                    'service' => 'PUNC'
                ],
                [
                    'id' => 9,
                    'service' => 'PEPITE'
                ],
                [
                    'id' => 10,
                    'service' => 'DEG'
                ],
                [
                    'id' => 11,
                    'service' => 'LLSH'
                ],
                [
                    'id' => 12,
                    'service' => 'Sciences et Techniques'
                ],
                [
                    'id' => 13,
                    'service' => 'INSPE'
                ],
                [
                    'id' => 14,
                    'service' => 'IUT'
                ],
                [
                    'id' => 15,
                    'service' => 'IAE'
                ],
                [
                    'id' => 16,
                    'service' => 'ISEA'
                ],
                [
                    'id' => 17,
                    'service' => 'LARJE'
                ],
                [
                    'id' => 18,
                    'service' => 'LIRE'
                ],
                [
                    'id' => 19,
                    'service' => 'ERALO'
                ],
                [
                    'id' => 20,
                    'service' => 'TROCA'
                ],
                [
                    'id' => 21,
                    'service' => 'ED'
                ],
                [
                    'id' => 22,
                    'service' => 'ENTROPIE'
                ],
                [
                    'id' => 23,
                    'service' => 'ESPACE DEV'
                ],
                [
                    'id' => 24,
                    'service' => 'Ressources Humaines'
                ],
                [
                    'id' => 25,
                    'service' => 'Pilotage et contrôle de gestion'
                ],
                [
                    'id' => 26,
                    'service' => 'SAJ'
                ],
                [
                    'id' => 27,
                    'service' => 'DEPIL'
                ],
                [
                    'id' => 28,
                    'service' => 'DNSI'
                ],
                [
                    'id' => 29,
                    'service' => 'Bibliothèque Universitaire'
                ],
                [
                    'id' => 30,
                    'service' => 'DARRED'
                ],
                [
                    'id' => 31,
                    'service' => 'DEVE'
                ],
                [
                    'id' => 32,
                    'service' => 'Pôle FCA'
                ]
            ]);
    }
}