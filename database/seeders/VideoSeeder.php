<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert(
            [
                'imageVideo'=>'video.jpg',
                'srcVideo'=>'https://www.youtube.com/watch?v=JgHfx2v9zOU',
            ],
        );
    }
}
