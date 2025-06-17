<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            
            // Data Pelapor
            $table->string('nama_pelapor');
            $table->unsignedInteger('umur_pelapor')->nullable();
            $table->string('pekerjaan_pelapor')->nullable();
            $table->text('alamat_pelapor')->nullable();
            $table->string('no_hp_pelapor');
            
            // Isi Laporan & Lokasi
            $table->text('isi_laporan');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            
            // Status dan Tanggal
            $table->dateTime('tanggal_laporan')->useCurrent();
            $table->string('status', 50)->default('Baru');
            
            // Foreign Keys untuk penugasan
            // onDelete('set null') berarti jika user dihapus, kolom ini akan jadi NULL, laporannya tidak ikut terhapus.
            $table->foreignId('verified_by_admin_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('assigned_to_reskrim_id')->nullable()->constrained('users')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
