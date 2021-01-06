<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanniereLogoSloganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banniere_logo_slogans')->insert(
            [
                'logo'=>'logo.png',
                'slogan'=>'Get your freebie template now!',
            ],
        );
    }
}
