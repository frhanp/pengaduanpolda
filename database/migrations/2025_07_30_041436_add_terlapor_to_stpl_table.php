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
        Schema::table('stpl', function (Blueprint $table) {
            // Menambahkan kolom baru setelah 'uraian_kejadian'
            $table->string('terlapor')->after('uraian_kejadian')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stpl', function (Blueprint $table) {
            $table->dropColumn('terlapor');
        });
    }
};
