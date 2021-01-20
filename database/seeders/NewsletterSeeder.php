<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletters')->insert(
            [
                [
                    'email'=>'test@hotmail.com',
                ],
                [
                    'email'=>'test2@hotmail.com',
                ],
                [
                    'email'=>'test3@hotmail.com',
                ],
            ],
        );
    }
}
