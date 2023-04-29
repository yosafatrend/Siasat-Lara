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
        Schema::create('detail_khs', function (Blueprint $table) {
            $table->id('id_detailkhs');
            $table->unsignedBigInteger('id_khs');
            $table->string('id_matkul');
            $table->string('nilai')->nullable();

            $table->foreign('id_khs')->references('id_khs')->on('khs');
            $table->foreign('id_matkul')->references('id_matkul')->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_khs');
    }
};
