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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->string('id_reservasi', 30)->primary();
            $table->string('id_kamar', 30)->references('id_kamar')->on('kamar');
            $table->string('nik_tamu',30)->references('nik_tamu')->on('tamu');
            $table->date('tanggal_cin');
            $table->date('tanggal_cout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
