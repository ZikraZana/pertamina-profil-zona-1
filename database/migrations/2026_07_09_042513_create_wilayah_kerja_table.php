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
        Schema::create('wilayah_kerja', function (Blueprint $table) {
            $table->id('id_wilayah');
            $table->string('nama_wilayah');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('jenis_wilayah_kerja');
            $table->string('tahun_berdiri');
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah_kerja');
    }
};
