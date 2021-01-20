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
        DB::table('blog_tag')->insert([
            [
                'blog_id'=>'1',
                'tag_id'=>'1',
            ],
            [
                'blog_id'=>'1',
                'tag_id'=>'2',
            ],
            [
                'blog_id'=>'1',
                'tag_id'=>'5',
            ],
            [
                'blog_id'=>'2',
                'tag_id'=>'3',
            ],
            [
                'blog_id'=>'2',
                'tag_id'=>'4',
            ],
            [
                'blog_id'=>'2',
                'tag_id'=>'6',
            ],
            [
                'blog_id'=>'3',
                'tag_id'=>'3',
            ],
            [
                'blog_id'=>'3',
                'tag_id'=>'4',
            ],
            [
                'blog_id'=>'3',
                'tag_id'=>'6',
            ],
        ]);
    }
}
