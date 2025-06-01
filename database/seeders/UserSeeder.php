<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Super Admin
        User::create([
            'name' => 'Super User',
            'email' => 'amina.smaili@example.com',
            'password' => Hash::make('SuperUser123!'),
            'phone' => '1234567890',
            'address' => '123 Main St, City, Country',
            'birthdate' => '1990-01-01',
            'gender' => 'female',
            'profile_picture' => 'profile_pictures/super_admin.png',
            'is_active' => true,
            'last_login_at' => now(),
        ])->assignRole('super-admin');

        // Create Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'boubker.el-jouhari@example.com',
            'password' => Hash::make('AdminSecure456!'),
            'phone' => '0987654321',
            'address' => '456 Elm St, City, Country',
            'birthdate' => '1998-05-03',
            'gender' => 'male',
            'profile_picture' => 'profile_pictures/admin.png',
            'is_active' => true,
            'last_login_at' => now(),
        ])->assignRole('admin');

        // Create Trainer
        User::create([
            'name' => 'Trainer User',
            'email' => 'khalid.merzouki@example.com',
            'password' => Hash::make('Trainer789!'),
            'phone' => '1122334455',
            'address' => '789 Oak St, City, Country',
            'birthdate' => '1984-09-08',
            'gender' => 'male',
            'profile_picture' => 'profile_pictures/trainer.png',
            'is_active' => true,
            'last_login_at' => now(),
        ])->assignRole('trainer');

        // Create Trainee
        User::create([
            'name' => 'Trainee User',
            'email' => 'dalila.lahlou@example.com',
            'password' => Hash::make('Trainee101!'),
            'phone' => '5566778899',
            'address' => '321 Pine St, City, Country',
            'birthdate' => '1990-01-01',
            'gender' => 'female',
            'profile_picture' => 'profile_pictures/trainee.png',
            'is_active' => true,
            'last_login_at' => now(),
        ])->assignRole('trainee');
    }
}
