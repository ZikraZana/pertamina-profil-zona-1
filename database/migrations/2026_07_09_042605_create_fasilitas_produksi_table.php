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
        Schema::create('fasilitas_produksi', function (Blueprint $table) {
            $table->id('id_fasilitas');
            $table->foreignId('id_wilayah')->constrained('wilayah_kerja', 'id_wilayah')->onDelete('cascade');
            $table->string('nama_fasilitas');
            $table->string('jenis_fasilitas');
            $table->integer('jumlah', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas_produksi');
    }
};
