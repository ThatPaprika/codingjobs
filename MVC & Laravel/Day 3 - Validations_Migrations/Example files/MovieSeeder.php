<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::insert('INSERT INTO movies(title, views, date_of_release, poster
        //VALUES("harry potter", 1234, "19/10/2001", "")');

        DB::table('movies')->insert([
            'title' => 'Harry potter',
            'views' => 1234,
            'date_of_release' => '2001/10/19',
            'poster' => ""
        ]);
    }
}
