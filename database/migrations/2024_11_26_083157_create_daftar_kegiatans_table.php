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
            Schema::create('daftar_kegiatans', function (Blueprint $table) {
                $table->id();
                $table->string('nama_kegiatan');
                $table->date('tanggal');
                $table->text('deskripsi');
                $table->string('gambar')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_kegiatan');

    }
};