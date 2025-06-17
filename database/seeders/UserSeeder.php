<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Enums\UserRole;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat User Admin
        User::create([
            'name' => 'Admin Polda',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), // ganti password jika perlu
            'role' => UserRole::ADMIN,
        ]);

        // Membuat User Reskrim
        User::create([
            'name' => 'Budi Reskrim',
            'email' => 'budi.reskrim@gmail.com',
            'password' => Hash::make('password'),
            'role' => UserRole::RESKRIM,
        ]);

        User::create([
            'name' => 'Siti Reskrim',
            'email' => 'siti.reskrim@gmail.com',
            'password' => Hash::make('password'),
            'role' => UserRole::RESKRIM,
        ]);
    }
}
