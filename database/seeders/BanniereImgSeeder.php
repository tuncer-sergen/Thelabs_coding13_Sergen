<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanniereImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banniere_imgs')->insert(
            [
                [
                    'image'=>'01.jpg',
                ],
                [
                    'image'=>'02.jpg',
                ],
            ],
        );
    }
}
