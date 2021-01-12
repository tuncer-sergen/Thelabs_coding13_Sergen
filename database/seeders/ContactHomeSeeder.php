<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_homes')->insert([
            'titreContact'=>'Contact us',
            'textContact'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'sousTitreContact'=>'Main Office',
            'rueContact'=>'C/ Libertad, 34',
            'codePostalContact'=>'05200 Arévalo',
            'telContact'=>'0034 37483 2445 322',
            'emailContact'=>'hello@company.com',
            'btnContact'=>'send',
        ]);
    }
}
