<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(
            [
                [
                    'nomLien1'=>'Home',
                    'nomLien2'=>'Services',
                    'nomLien3'=>'Blog',
                    'nomLien4'=>'Contact',
                ],
            ],
        );
    }
}
