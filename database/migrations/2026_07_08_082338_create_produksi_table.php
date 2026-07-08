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
        Schema::create('produksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fields_id')->constrained('fields')->onDelete('cascade');
            $table->decimal('produksi_minyak', 10, 2)->default(0.00);
            $table->decimal('produksi_gas', 10, 2)->default(0.00);
            $table->date('tanggal_produksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksi');
    }
};
