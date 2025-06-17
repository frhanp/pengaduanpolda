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
        Schema::create('stpl', function (Blueprint $table) {
            $table->id();
            
            // Relasi one-to-one ke pengaduan. Jika pengaduan dihapus, STPL juga ikut terhapus.
            $table->foreignId('pengaduan_id')->unique()->constrained()->onDelete('cascade');
            
            $table->string('nomor_stpl')->unique();
            $table->date('tanggal_dibuat');
            
            // Dibuat oleh siapa. onDelete('restrict') mencegah user admin dihapus jika masih punya STPL.
            $table->foreignId('dibuat_oleh_admin_id')->constrained('users')->onDelete('restrict');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stpl');
    }
};
