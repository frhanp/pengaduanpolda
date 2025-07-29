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
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Kunci untuk mencari
            [                                // Data untuk dibuat atau di-update
                'name' => 'Admin Polda',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Membuat User Reskrim
        User::updateOrCreate(
            ['email' => 'budi.reskrim@gmail.com'],
            [
                'name' => 'Budi Reskrim',
                'password' => Hash::make('password'),
                'role' => 'reskrim',
            ]
        );

        User::updateOrCreate(
            ['email' => 'siti.reskrim@gmail.com'],
            [
                'name' => 'Siti Reskrim',
                'password' => Hash::make('password'),
                'role' => 'reskrim',
            ]
        );

        User::updateOrCreate(
            ['email' => 'superadmin@polres.test'],
            [
                'name' => 'Super Administrator',
                'password' => Hash::make('superadmin123'), // Ganti dengan password yang sangat aman
                'role' => 'admin', // Super Admin tetap memiliki role 'admin'
                'unit_kerja' => 'Polres Kota Gorontalo', // Atau unit pusat lainnya
            ]
        );
    }
}
