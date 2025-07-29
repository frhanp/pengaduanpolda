<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UnitUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar 8 unit kerja yang akan kita gunakan
        $unitKerjaList = [
            'Polres Kota Gorontalo',
            'Polsek Kota Utara',
            'Polsek Kota Selatan',
            'Polsek Kota Barat',
            'Polsek Kota Timur',
            'Polsek Kota Tengah',
            'Polsek Dungingi',
            'Polsek Kawasan Pelabuhan Gorontalo',
        ];

        // Looping untuk setiap unit kerja
        foreach ($unitKerjaList as $unit) {
            // Buat nama username yang simpel, contoh: 'admin-kota-utara'
            $usernameSuffix = strtolower(str_replace(' ', '-', str_replace('Polsek ', '', $unit)));

            // 1. Buat User Admin untuk unit ini
            User::create([
                'name' => 'Admin ' . $unit,
                'email' => 'admin-' . $usernameSuffix . '@polres.test',
                'password' => Hash::make('password'), // Ganti 'password' dengan password yang aman
                'role' => 'admin',
                'unit_kerja' => $unit,
            ]);

            // 2. Buat User Reskrim untuk unit ini
            User::create([
                'name' => 'Reskrim ' . $unit,
                'email' => 'reskrim-' . $usernameSuffix . '@polres.test',
                'password' => Hash::make('password'), // Ganti 'password' dengan password yang aman
                'role' => 'reskrim',
                'unit_kerja' => $unit,
            ]);
        }
    }
}
