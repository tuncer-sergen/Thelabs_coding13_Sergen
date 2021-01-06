<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(
            [
                [
                    'imageTeam'=>'1.jpg',
                    'nomTeam'=>'Christinne',
                    'prenomTeam'=>'Williams',
                    'posteTeam'=>'Project Manager',
                ],
                [
                    'imageTeam'=>'2.jpg',
                    'nomTeam'=>'Christinne',
                    'prenomTeam'=>'Williams',
                    'posteTeam'=>'Junior Developer',
                ],
                [
                    'imageTeam'=>'3.jpg',
                    'nomTeam'=>'Christinne',
                    'prenomTeam'=>'Williams',
                    'posteTeam'=>'Digital Designer',
                ],
            ],
        );

    }
}
