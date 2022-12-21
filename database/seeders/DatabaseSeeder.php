<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => \Hash::make('admin'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Guest',
            'username' => 'guest',
            'password' => \Hash::make('guest'),
            'role' => 'guest'
        ]);
    }
}
