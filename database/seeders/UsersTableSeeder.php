<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'adminuser',
                'password' => Hash::make('password'),  // Use a secure hash for passwords
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'regularuser',
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
