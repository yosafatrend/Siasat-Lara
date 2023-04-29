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
        Schema::create('detail_krs', function (Blueprint $table) {
            $table->id('id_detailkrs');
            $table->unsignedBigInteger('id_krs');
            $table->string('id_matkul');

            $table->foreign('id_krs')->references('id_krs')->on('krs');
            $table->foreign('id_matkul')->references('id_matkul')->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_krs');
    }
};
