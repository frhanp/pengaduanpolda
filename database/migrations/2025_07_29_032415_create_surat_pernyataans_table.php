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
        Schema::create('surat_pernyataans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengaduan_id')->constrained('pengaduans')->onDelete('cascade');
            $table->foreignId('dibuat_oleh_reskrim_id')->constrained('users')->onDelete('cascade');
            
            // Kolom untuk menyimpan semua data pihak sebagai JSON
            $table->json('pihak_terlibat'); 
            
            // Kolom untuk isi pernyataan dan tempat dibuat
            $table->text('isi_pernyataan');
            $table->string('tempat_dibuat');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pernyataans');
    }
};
