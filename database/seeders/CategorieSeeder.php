<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'categorie' => 'hmtl'
            ],
            [
                'categorie' => 'css'
            ],
            [
                'categorie' => 'bootstrap'
            ],
            [
                'categorie' => 'js'
            ],
            [
                'categorie' => 'laravel'
            ],
            [
                'categorie' => 'php'
            ],
            [
                'categorie' => 'react'
            ],
            [
                'categorie' => 'vue.js'
            ],
            [
                'categorie' => 'python'
            ],
            [
                'categorie' => 'ruby'
            ],
            [
                'categorie' => 'c++'
            ],
            [
                'categorie' => 'c#'
            ],
        ]);

    }
}
