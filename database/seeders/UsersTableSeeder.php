<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin PT. XYZ',
                'email' => 'admin@xyz.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'company' => 'PT. XYZ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Manager PT. XYZ',
                'email' => 'manager@xyz.com',
                'password' => Hash::make('password'),
                'role' => 'manager',
                'company' => 'PT. XYZ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin PT. XYZ-1',
                'email' => 'admin@xyz1.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'company' => 'PT. XYZ-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Supervisor PT. XYZ-1',
                'email' => 'supervisor@xyz1.com',
                'password' => Hash::make('password'),
                'role' => 'supervisor',
                'company' => 'PT. XYZ-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin PT. XYZ-2',
                'email' => 'admin@xyz2.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'company' => 'PT. XYZ-2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Supervisor PT. XYZ-2',
                'email' => 'supervisor@xyz2.com',
                'password' => Hash::make('password'),
                'role' => 'supervisor',
                'company' => 'PT. XYZ-2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
