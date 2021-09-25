<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chefs')->insert([

            [
            'titre1'=> 'OUR',
            'titre2'=> 'ACCLAIMED',
            'titre3'=> 'CHEFS',
            'btn1'=> 'Dedicated to excellence.',
            'img1'=> 'team/1.jpg',
            'btn2'=> 'John Doe',
            'img2'=> "team/2.jpg",
            'btn3'=> 'Barry Scott',
            'img3'=> 'team/3.jpg',
            'btn4'=> 'Tom Smooth',
            'img4'=> 'team/4.jpg',
            'btn5'=> "Harvey Wallace",
            
            ]
        ]);
    }
}
