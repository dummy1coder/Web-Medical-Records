<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Liam', 
            'email' => 'dummy@gmail.com',
            'password' => Hash::make('dummy1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Lyka', 
            'email' => 'dummy1@gmail.com',
            'password' => Hash::make('dummy1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Doctor User
        $doctor = User::create([
            'name' => 'Love', 
            'email' => 'dummy2@gmail.com',
            'password' => Hash::make('dummy1234')
        ]);
        $doctor->assignRole('Doctor');
    }
}