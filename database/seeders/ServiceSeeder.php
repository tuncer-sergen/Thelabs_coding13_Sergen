<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                [
                    'iconeService'=>'flaticon-023-flask',
                    'titreService'=>'Get in the lab',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-011-compass',
                    'titreService'=>'Projects online',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-037-idea',
                    'titreService'=>'SMART MARKETING',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-039-vector',
                    'titreService'=>'Social Media',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-036-brainstorming',
                    'titreService'=>'Brainstorming',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-026-search',
                    'titreService'=>'Documented',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-018-laptop-1',
                    'titreService'=>'Responsive',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-043-sketch',
                    'titreService'=>'Retina ready',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
                [
                    'iconeService'=>'flaticon-012-cube',
                    'titreService'=>'Ultra modern',
                    'textService'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
                ],
            ],
        );
    }
}
