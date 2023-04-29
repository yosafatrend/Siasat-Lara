<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->id('id_nilai');
        // $table->string('nim');
        // $table->string('nidn');
        // $table->string('id_matkul');
        // $table->integer('semester')->nullable();
        // $table->integer('nilai_kuis')->nullable();
        // $table->integer('nilai_uts')->nullable();
        // $table->integer('nilai_uas')->nullable();
        // $table->integer('nilai_akhir')->nullable();

        // $table->foreign('nim')->references('nim')->on('mahasiswa');
        // $table->foreign('nidn')->references('nidn')->on('dosen');
        // $table->foreign('id_matkul')->references('id_matkul')->on('mata_kuliah');

        DB::table('nilai')->insert([
            'id_nilai' => '0001',
            'nim' => '672021111',
            'nidn' => '3910004879',
            'id_matkul' => 'TC224C',
            'semester' => 4,
            'nilai_kuis' => 76,
            'nilai_uts' => 80,
            'nilai_uas' => 90,
            'nilai_akhir' => 85,
        ]);

        DB::table('nilai')->insert([
            'id_nilai' => '0002',
            'nim' => '672021999',
            'nidn' => '0015126901',
            'id_matkul' => 'DX402D',
            'semester' => 2,
            'nilai_kuis' => 85,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'nilai_akhir' => 100,
        ]);

        DB::table('nilai')->insert([
            'id_nilai' => '0003',
            'nim' => '672021998',
            'nidn' => '0012106704',
            'id_matkul' => 'TC224C',
            'semester' => 4,
            'nilai_kuis' => 88,
            'nilai_uts' => 72,
            'nilai_uas' => 90,
            'nilai_akhir' => 80,
        ]);
    }
}
