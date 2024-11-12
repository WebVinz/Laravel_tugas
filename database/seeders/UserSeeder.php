<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama' => 'Admin User',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'level' => 'admin'
        ]);

        User::create([
            'nama' => 'Standard User',
            'username' => 'user',
            'password' => bcrypt('password'),
            'level' => 'user'
        ]);
    }
}
