<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('pemeriksaan_kartus')) {
            return;
        }

        Schema::create('pemeriksaan_kartus', function (Blueprint $table) {
            $table->id();
            // Mengacu ke id pada tabel Data Kartu (tanpa foreign key agar aman di struktur tabel Anda).
            $table->unsignedBigInteger('peserta_kartu_id')->index();
            $table->string('status');
            $table->text('catatan')->nullable();
            $table->string('diperiksa_oleh')->nullable();
            $table->timestamp('diperiksa_pada')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_kartus');
    }
};