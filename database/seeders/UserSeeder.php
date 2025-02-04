<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        // Customer User
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => Hash::make('customer123'),
        ]);
    }
}
