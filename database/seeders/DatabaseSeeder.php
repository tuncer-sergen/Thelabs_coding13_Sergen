<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MenuSeeder::class,
            BanniereImgSeeder::class,
            BanniereLogoSloganSeeder::class,
            PresentationSeeder::class,
            VideoSeeder::class,
            TestimonialTitreSeeder::class,
            TestimonialSeeder::class,
            ServiceTitreSeeder::class,
            ServiceSeeder::class,
            TeamTitreSeeder::class,
            TeamSeeder::class,
            ReadySeeder::class,
        ]);
    }
}
