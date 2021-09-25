<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([

            [
            'titre1'=> 'OUR',
            'titre2'=> 'HAPPY',
            'titre3'=> 'CUSTOMERS',
            'btn1'=> 'Satisfaction, everytime.',
            'img1'=> 'team/small1.jpg',
            'btn2'=> 'Charles Davies',
            'btn3'=> "Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.",
            
            ]
                
        ]);
    }
}
