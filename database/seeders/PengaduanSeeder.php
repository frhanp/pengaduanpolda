<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengaduan;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // Inisialisasi Faker untuk data berbahasa Indonesia
            $faker = Faker::create('id_ID');
    
            // [MODIFIKASI] - Menambah jumlah hotspot agar sebaran lebih padat di seluruh kota
            $hotspots = [
                ['name' => 'Mall Gorontalo', 'lat' => 0.5485, 'lon' => 123.0580],
                ['name' => 'Taman Kota Gorontalo', 'lat' => 0.5415, 'lon' => 123.0610],
                ['name' => 'Kampus UNG', 'lat' => 0.5560, 'lon' => 123.0585],
                ['name' => 'Masjid Agung Baiturrahim', 'lat' => 0.5401, 'lon' => 123.0594],
                ['name' => 'Patung B.J. Habibie', 'lat' => 0.5186, 'lon' => 123.0991],
                ['name' => 'Pelabuhan Gorontalo', 'lat' => 0.5055, 'lon' => 123.0631],
                ['name' => 'Terminal Dungingi', 'lat' => 0.5139, 'lon' => 123.0487],
                ['name' => 'CitraLand Gorontalo', 'lat' => 0.5734, 'lon' => 123.0458],
            ];
    
            // [MODIFIKASI] - Menambah variasi contoh laporan
            $contohLaporan = [
                'Pencurian helm di parkiran.',
                'Aksi balap liar sangat meresahkan warga sekitar.',
                'Knalpot racing dengan suara bising mengganggu di malam hari.',
                'Terjadi perkelahian antar pemuda.',
                'Ada perkumpulan mencurigakan di taman.',
                'Kehilangan dompet dan surat-surat penting.',
                'Penipuan dengan modus undian berhadiah.',
                'Lampu jalan mati sudah seminggu.',
                'Kemacetan parah akibat parkir liar.',
                'Sampah menumpuk dan tidak diangkut.',
            ];
    
            // [MODIFIKASI] - Buat 250 data pengaduan palsu untuk kepadatan lebih tinggi
            for ($i = 0; $i < 250; $i++) {
                $hotspot = Arr::random($hotspots);
    
                // Buat koordinat acak di sekitar hotspot
                $latitude = $hotspot['lat'] + ($faker->randomFloat(5, -0.005, 0.005));
                $longitude = $hotspot['lon'] + ($faker->randomFloat(5, -0.005, 0.005));
    
                Pengaduan::create([
                    'nama_pelapor' => $faker->name,
                    'umur_pelapor' => $faker->numberBetween(17, 60),
                    'pekerjaan_pelapor' => $faker->jobTitle,
                    'alamat_pelapor' => $faker->address,
                    'no_hp_pelapor' => $faker->phoneNumber,
                    'isi_laporan' => Arr::random($contohLaporan) . ' Lokasi di sekitar ' . $hotspot['name'],
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'tanggal_laporan' => $faker->dateTimeBetween('-3 months', 'now'),
                    'status' => 'Baru',
                ]);
            }
        }
}
