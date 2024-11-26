<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'id_user' => 1,
                'nama' => 'Admin User',
                'username' => 'admin',
                'password' => Hash::make('password123'), // Gunakan Hash untuk keamanan
                'level' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'nama' => 'Regular User',
                'username' => 'user1',
                'password' => Hash::make('password123'),
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'nama' => 'Guest User',
                'username' => 'guest',
                'password' => Hash::make('guestpass'),
                'level' => 'guest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
