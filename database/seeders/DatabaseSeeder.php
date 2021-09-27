<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            FooterSeeder::class,
            TestimonialSeeder::class,
            NavSeeder::class,
            MapSeeder::class,
            HeaderSeeder::class,
            ChefSeeder::class,
            BooktableSeeder::class,
            BookmenuSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
