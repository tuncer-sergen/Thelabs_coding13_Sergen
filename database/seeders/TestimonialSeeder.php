<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert(
            [
                [
                    'commentaire'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                    'image'=>'01.jpg',
                    'nom'=>'Michael',
                    'prenom'=>'Smith',
                    'poste'=>'CEO Company',
                ],
                [
                    'commentaire'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                    'image'=>'02.jpg',
                    'nom'=>'Michael',
                    'prenom'=>'Smith',
                    'poste'=>'CEO Company',
                ],
                [
                    'commentaire'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                    'image'=>'01.jpg',
                    'nom'=>'Michael',
                    'prenom'=>'Smith',
                    'poste'=>'CEO Company',
                ],
                [
                    'commentaire'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                    'image'=>'02.jpg',
                    'nom'=>'Michael',
                    'prenom'=>'Smith',
                    'poste'=>'CEO Company',
                ],
                [
                    'commentaire'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                    'image'=>'01.jpg',
                    'nom'=>'Michael',
                    'prenom'=>'Smith',
                    'poste'=>'CEO Company',
                ],
                [
                    'commentaire'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                    'image'=>'02.jpg',
                    'nom'=>'Michael',
                    'prenom'=>'Smith',
                    'poste'=>'CEO Company',
                ],
            ],
        );
    }
}
