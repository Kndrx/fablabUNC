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
                    'filiere' => 'Licence Economie et Gestion'
                ],
                [
                    'id' => 2,
                    'filiere' => 'Deust Geosciences Appliquées'
                ],
                [
                    'id' => 3,
                    'filiere' => 'Licence Informatique'
                ],
                [
                    'id' => 4,
                    'filiere' => 'Licence Mathématique'
                ],
                [
                    'id' => 5,
                    'filiere' => 'Licence Physique Chimie'
                ],
                [
                    'id' => 6,
                    'filiere' => 'Licence Pro Métiers de l"Instrumentation de la Mesure et du Contrôle Qualité'
                ],
                [
                    'id' => 7,
                    'filiere' => 'Licence Sciences de la Vie et de la Terre'
                ],
                [
                    'id' => 8,
                    'filiere' => 'Master Science de la durabilité'
                ],
                [
                    'id' => 9,
                    'filiere' => 'Préparation à l"examen d"accès au Centre Régional de Formation Professionnelle des Avocats'
                ],
                [
                    'id' => 10,
                    'filiere' => 'Licence Droit'
                ],
                [
                    'id' => 11,
                    'filiere' => 'Master en droit'
                ],
                [
                    'id' => 12,
                    'filiere' => 'Master Management et Administration des Entreprises'
                ],
                [
                    'id' => 13,
                    'filiere' => 'Master Méthodes Informatiques Appliquées à la Gestion des Entreprises'
                ],
                [
                    'id' => 14,
                    'filiere' => 'DU Etudiant Entrepreneur'
                ],
                [
                    'id' => 15,
                    'filiere' => 'PEPITE'
                ],
                [
                    'id' => 16,
                    'filiere' => 'DIU Professeurs et CPE stagiaires'
                ],
                [
                    'id' => 17,
                    'filiere' => 'DU Enseigner dans le premier degré'
                ],
                [
                    'id' => 18,
                    'filiere' => 'DU Méthodologie de la recherche en éducation pour les enseignants du premier degré de la Nouvelle-Calédonie'
                ],
                [
                    'id' => 19,
                    'filiere' => 'DU Métier de l"éducation et de l"enseignement mention professorat des écoles'
                ],
                [
                    'id' => 20,
                    'filiere' => 'DU Professeur et CPE stagiaires - Approfondissement et consolidation'
                ],
                [
                    'id' => 21,
                    'filiere' => 'Prépa tests - Préparation au CAPES'
                ],
                [
                    'id' => 22,
                    'filiere' => 'Master Premier degré'
                ],
                [
                    'id' => 23,
                    'filiere' => 'Master Second degré'
                ],
                [
                    'id' => 24,
                    'filiere' => 'BUT Gestion des entreprises et administrations'
                ],
                [
                    'id' => 25,
                    'filiere' => 'DUT Gestion des entreprises et administrations'
                ],
                [
                    'id' => 26,
                    'filiere' => 'Licence Pro Commerce et distribution'
                ],
                [
                    'id' => 27,
                    'filiere' => 'Licence Pro Métiers de la Gestion et Comptabilité - Comptabilité et paie - Parcours Collaborateur Social et Paie'
                ],
                [
                    'id' => 28,
                    'filiere' => 'Licence Pro Métiers de la gestion et de la comptabilité : Révision comptable'
                ],
                [
                    'id' => 29,
                    'filiere' => 'DU Capacité en Gestion des Entreprises'
                ],
                [
                    'id' => 30,
                    'filiere' => 'Licence Pro Métiers de la communication : chargé de communication'
                ],
                [
                    'id' => 31,
                    'filiere' => "BUT Métiers du Multimédia et de l'Internet"
                ],
                [
                    'id' => 32,
                    'filiere' => 'Licence Langues étrangères appliquées'
                ],
                [
                    'id' => 33,
                    'filiere' => 'Licence Langues, Littératures et Civilisations Etrangères et Régionales'
                ],
                [
                    'id' => 34,
                    'filiere' => 'Licence LETTRES'
                ],
                [
                    'id' => 35,
                    'filiere' => 'Licence Géographie et
                    Aménagement'
                ],
                [
                    'id' => 36,
                    'filiere' => 'Licence Histoire'
                ],
                [
                    'id' => 37,
                    'filiere' => 'Master Civilisations, cultures et sociétés'
                ],
                [
                    'id' => 38,
                    'filiere' => 'Capacite EN DROIT'
                ],
                [
                    'id' => 39,
                    'filiere' => 'Doctorat Anthropologie'
                ],
                [
                    'id' => 40,
                    'filiere' => 'Doctorat Biologie des organismes'
                ],
                [
                    'id' => 41,
                    'filiere' => 'Doctorat Biologie des organismes, aspects moléculaires'
                ],
                [
                    'id' => 42,
                    'filiere' => 'Doctorat Biologie des populations et écologie'
                ],
                [
                    'id' => 43,
                    'filiere' => 'Doctorat Chimie '
                ],
                [
                    'id' => 44,
                    'filiere' => 'Doctorat Droit '
                ],
                [
                    'id' => 45,
                    'filiere' => 'Doctorat Géographie '
                ],
                [
                    'id' => 46,
                    'filiere' => 'Doctorat Informatique'
                ],
                [
                    'id' => 47,
                    'filiere' => 'Doctorat Mathématiques '
                ],
                [
                    'id' => 48,
                    'filiere' => 'Doctorat Sciences de gestion'
                ],
                [
                    'id' => 49,
                    'filiere' => 'Doctorat Sciences de la vie et de la santé'
                ],
                [
                    'id' => 50,
                    'filiere' => "Doctorat Sciences de l'éducation"
                ],
                [
                    'id' => 51,
                    'filiere' => 'Doctorat Sciences du langage,linguistique et phonétique générale'
                ],
                [
                    'id' => 52,
                    'filiere' => 'Doctorat Sciences et techniques des activités physiques et sportives'
                ],
                [
                    'id' => 53,
                    'filiere' => 'Doctorat Terre solide : Géodynamique des enveloppes supérieures, paléobiosphère'
                ],
                [
                    'id' => 54,
                    'filiere' => 'DAEU option A'
                ],
                [
                    'id' => 55,
                    'filiere' => 'DAEU option B'
                ],
                [
                    'id' => 56,
                    'filiere' => 'DU Droit coutumier kanak'
                ],
                [
                    'id' => 57,
                    'filiere' => 'DU GEOSCIENCES MINES'
                ],
                [
                    'id' => 58,
                    'filiere' => 'DU Médiateur Artistique et Culturel'
                ],
                [
                    'id' => 59,
                    'filiere' => 'DU Médiation civile, commerciale et du travail'
                ],
                [
                    'id' => 60,
                    'filiere' => 'DU METALLURGIE'
                ],
                [
                    'id' => 61,
                    'filiere' => 'DU Prévention et gestion des conflits dans un contexte interculturel'
                ],
                [
                    'id' => 62,
                    'filiere' => 'DU Préventions et Règlements des différends'
                ],
                [
                    'id' => 63,
                    'filiere' => 'DU Professions immobilières'
                ],
                [
                    'id' => 64,
                    'filiere' => 'CU Initiation à la Recherche'
                ],
                [
                    'id' => 65,
                    'filiere' => 'Divers CPGE Grand Nouméa'
                ],
                [
                    'id' => 66,
                    'filiere' => 'Divers CPGE Lapérouse'
                ],
                [
                    'id' => 67,
                    'filiere' => 'EI Programme d"échange international'
                ],
            ]);
    }
}