<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooktableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booktables')->insert([

            [
            'titre1'=> 'BOOK',
            'titre2'=> 'YOUR',
            'titre3'=> 'TABLE',
            'btn1'=> 'Satisfaction, everytime.',
            'btn2'=> 'Address',
            'btn3'=> 'Florence Building',
            'btn4'=> 'Kings Square',
            'btn5'=> 'London, LDN1 23 ',
            'btn6'=> '+448754 658 048',
            'btn7'=> 'Opening Times',
            'btn8'=> 'Monday',
            'btn9'=> 'Tuesday',
            'btn10'=> 'Wednesday',
            'btn11'=> 'Thursday',
            'btn12'=> 'Friday',
            'btn13'=> 'Saturday',
            'btn14'=> 'Sunday',
            'btn15'=> '11:00 AM - 11:00 PM',
            'btn16'=> '11:00 AM - 11:00 PM',
            'btn17'=> '11:00 AM - 11:00 PM',
            'btn18'=> '11:00 AM - 11:00 PM',
            'btn19'=> '11:00 AM - 1:00 AM',
            'btn20'=> '11:00 AM - 1:00 AM',
            'btn21'=> '11:00 AM - 1:00 AM',
            
            ]
                
        ]);
    }
}
