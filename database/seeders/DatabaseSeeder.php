<?php

namespace Database\Seeders;

use App\Models\User;
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
        // Default users
        User::create([
            'name' => 'powerful admin',
            'email' => 'admin@lazday.com',
            'password' => bcrypt('password'),
        ]);

        // User::factory(10)->create();
    }
}
