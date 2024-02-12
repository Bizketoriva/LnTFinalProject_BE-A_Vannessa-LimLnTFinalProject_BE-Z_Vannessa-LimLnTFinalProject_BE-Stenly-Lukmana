<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'adminAccount@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'guest',
            'email' => 'guestAccount@gmail.com',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Work'
        ]);

        Category::create([
            'name' => 'Academic'
        ]);

        Category::create([
            'name' => 'Utilities'
        ]);

    }
}
