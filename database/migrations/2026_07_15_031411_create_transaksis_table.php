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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id')->constrained();
            $table->foreignId('tarif_id')->constrained();
            $table->integer('durasi_jam');
            $table->decimal('biaya_total');
            $table->enum('status', ['masuk', 'keluar']);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('area_parkir_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
