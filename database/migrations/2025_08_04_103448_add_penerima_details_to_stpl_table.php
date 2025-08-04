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
            $table->string('nama_penerima')->after('dibuat_oleh_admin_id');
            $table->string('nrp_penerima', 20)->after('nama_penerima');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stpl', function (Blueprint $table) {
            $table->dropColumn('nama_penerima');
            $table->dropColumn('nrp_penerima');
        });
    }
};
