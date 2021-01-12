<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicePrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_primes')->insert([
            'titreServicePrime'=>'Get in (the Lab) and  discover the world',
            'btnServicePrime'=>'browse'
        ]);
    }
}
