<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ADMIN',
            'email' => "admin@gmail.com",
            'password' => bcrypt("adminadmin"),
            'is_admin' => True,
        ]);
    }
}
