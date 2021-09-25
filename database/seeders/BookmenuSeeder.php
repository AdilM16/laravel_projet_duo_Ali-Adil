<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmenus')->insert([

            [
            'img'=> 'bg/bg10.jpg',
            'btn1'=> 'Love',
            'btn2'=> 'Steak?',
            'btn3'=> 'Conveniently leverage others distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.',
            'btn4'=> 'Book Now',
            'img2'=> 'bg/bg5.jpg',
            'btn5'=> 'Create',
            'btn6'=> 'Memories',
            'btn7'=> 'Conveniently leverage others distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.',
            'btn8'=> 'View Menu',
            ]
                
        ]);
    }
}
