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
            // Menambahkan kolom baru setelah 'pekerjaan_pelapor'
            $table->string('agama', 50)->after('pekerjaan_pelapor')->nullable();
            $table->string('tempat_lahir')->after('agama')->nullable();
            $table->date('tanggal_lahir')->after('tempat_lahir')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->dropColumn(['agama', 'tempat_lahir', 'tanggal_lahir']);
        });
    }
};
