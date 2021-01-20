<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'=>'admin',
                    'prenom'=>'admin',
                    'poste'=>'admin',
                    'email'=>'admin@admin.com',
                    'src'=>'01.jpg',
                    'password'=> Hash::make('admin@admin.com'), 
                    'role_id'=>'4',
                ],
                [
                    'name'=>'webmaster',
                    'prenom'=>'webmaster',
                    'poste'=>'webmaster',
                    'email'=>'webmaster@webmaster.com',
                    'src'=>'01.jpg',
                    'password'=> Hash::make('webmaster@webmaster.com'), 
                    'role_id'=>'3',
                ],
                [
                    'name'=>'redacteur',
                    'prenom'=>'redacteur',
                    'poste'=>'redacteur',
                    'email'=>'redacteur@redacteur.com',
                    'src'=>'01.jpg',
                    'password'=> Hash::make('redacteur@redacteur.com'), 
                    'role_id'=>'2',
                ],
                [
                    'name'=>'membre',
                    'prenom'=>'membre',
                    'poste'=>'membre',
                    'email'=>'membre@membre.com',
                    'src'=>'01.jpg',
                    'password'=> Hash::make('membre@membre.com'), 
                    'role_id'=>'1',
                ],
            ],
        );
    }
}
