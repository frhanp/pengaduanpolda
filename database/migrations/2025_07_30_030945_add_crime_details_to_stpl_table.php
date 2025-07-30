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
            // Menambahkan kolom baru setelah 'dibuat_oleh_admin_id'
            $table->string('tindak_pidana')->after('dibuat_oleh_admin_id')->nullable();
            $table->string('pasal_dilanggar')->after('tindak_pidana')->nullable();
            $table->string('hari_kejadian')->after('pasal_dilanggar')->nullable();
            $table->date('tanggal_kejadian')->after('hari_kejadian')->nullable();
            $table->text('tempat_kejadian')->after('tanggal_kejadian')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stpl', function (Blueprint $table) {
            $table->dropColumn([
                'tindak_pidana',
                'pasal_dilanggar',
                'hari_kejadian',
                'tanggal_kejadian',
                'tempat_kejadian'
            ]);
        });
    }
};
