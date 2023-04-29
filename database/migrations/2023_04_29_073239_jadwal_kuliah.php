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
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->string('nidn');
            $table->string('id_matkul');
            $table->string('hari')->nullable();
            $table->string('jam')->nullable();
            $table->string('tahun_akademik')->nullable();

            $table->foreign('nidn')->references('nidn')->on('dosen');
            $table->foreign('id_matkul')->references('id_matkul')->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliah');
    }
};
