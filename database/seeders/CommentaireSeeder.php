<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            [
                'nom'=>'sergen',
                'date'=>'13-01-2021',
                'com'=>'fctvgbhnj,k',
                'blog_id'=>1,
            ],
            [
                'nom'=>'sergosh',
                'date'=>'10-01-2021',
                'com'=>'fctvgbhnj,k',
                'blog_id'=>2,
            ],

        ]);
    }
}
