<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->insert([

            [
            'titre1'=> 'THE',
            'titre2'=> 'GRILL',
            'btn1'=> 'ABOUT US',
            'btn2'=> 'SPECIALS',
            'btn3'=> 'OUR MENU',
            'btn4'=> 'BOOK A TABLE',
            'btn5'=> 'LOG IN',
            'btn6'=> 'REGISTER',
            ]

        ]);
    }
}
