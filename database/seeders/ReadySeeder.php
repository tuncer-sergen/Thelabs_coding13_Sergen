<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('readies')->insert(
            [
                'readyTitre'=>'Are you ready to stand out?',
                'readySousTitre'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
                'readyBoutton'=>'Browse',
            ],
        );

    }
}
