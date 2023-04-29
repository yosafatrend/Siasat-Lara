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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id('id_nilai');
            $table->string('nim');
            $table->string('nidn');
            $table->string('id_matkul');
            $table->integer('semester')->nullable();
            $table->integer('nilai_kuis')->nullable();
            $table->integer('nilai_uts')->nullable();
            $table->integer('nilai_uas')->nullable();
            $table->integer('nilai_akhir')->nullable();

            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->foreign('nidn')->references('nidn')->on('dosen');
            $table->foreign('id_matkul')->references('id_matkul')->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
