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
    Schema::table('peserta_kartus', function (Blueprint $table) {
        $table->dropIndex(['nik']);
        $table->unique('nik');
    });
}

public function down(): void
{
    Schema::table('peserta_kartus', function (Blueprint $table) {
        $table->dropUnique(['nik']);
        $table->index('nik');
    });
}
};
