<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class art_tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('art_tags')->insert([
            [
                'art_id'=>'1',
                'tag_id'=>'1',
            ],
            [
                'art_id'=>'1',
                'tag_id'=>'2',
            ],
            [
                'art_id'=>'1',
                'tag_id'=>'5',
            ],
            [
                'art_id'=>'2',
                'tag_id'=>'3',
            ],
            [
                'art_id'=>'2',
                'tag_id'=>'4',
            ],
            [
                'art_id'=>'2',
                'tag_id'=>'6',
            ],
        ]);
    }
}
