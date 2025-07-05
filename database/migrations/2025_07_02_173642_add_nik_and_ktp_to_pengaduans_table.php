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
        Schema::table('pengaduans', function (Blueprint $table) {
            // Menambahkan kolom NIK setelah 'no_hp_pelapor'
            $table->string('nik', 16)->after('no_hp_pelapor')->nullable();

            // Menambahkan kolom untuk path file foto KTP setelah NIK
            $table->string('foto_ktp')->after('nik')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->dropColumn(['nik', 'foto_ktp']);
        });
    }
};
