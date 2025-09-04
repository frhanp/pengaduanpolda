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
        Schema::table('surat_pernyataans', function (Blueprint $table) {
            // Menambahkan kolom baru untuk menyimpan data saksi setelah kolom pihak_terlibat
            $table->json('saksi_terlibat')->nullable()->after('pihak_terlibat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surat_pernyataans', function (Blueprint $table) {
            $table->dropColumn('saksi_terlibat');
        });
    }
};
