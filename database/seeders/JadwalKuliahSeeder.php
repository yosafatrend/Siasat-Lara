<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JadwalKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  $table->id('id_jadwal');
    //  $table->string('nidn');
    //  $table->unsignedBigInteger('id_matkul');
    //  $table->string('hari')->nullable();
    //  $table->string('jam')->nullable();
    //  $table->string('tahun_akademik')->nullable();

    //  $table->foreign('nidn')->references('nidn')->on('dosen');
    //  $table->foreign('id_matkul')->references('id_matkul')->on('mata_kuliah');

    public function run(): void
    {
        DB::table('jadwal_kuliah')->insert([
            'id_jadwal' => '01',
            'hari' => 'Senin',
            'jam' => '11-13',
            'tahun_akademik' => '2022-2023',
            'nidn' => '3910004879',
            'id_matkul' => 'TC224C'
        ]);

        DB::table('jadwal_kuliah')->insert([
            'id_jadwal' => '02',
            'hari' => 'Senin',
            'jam' => '13-16',
            'tahun_akademik' => '2022-2023',
            'nidn' => '0015126901',
            'id_matkul' => 'DX402D'
        ]);

        DB::table('jadwal_kuliah')->insert([
            'id_jadwal' => '03',
            'hari' => 'Rabu',
            'jam' => '08-10',
            'tahun_akademik' => '2022-2023',
            'nidn' => '0012106704',
            'id_matkul' => 'TC224C'
        ]);

        DB::table('jadwal_kuliah')->insert([
            'id_jadwal' => '04',
            'hari' => 'Rabu',
            'jam' => '10-13',
            'tahun_akademik' => '2022-2023',
            'nidn' => '6229078163',
            'id_matkul' => 'TC223H'
        ]);

        DB::table('jadwal_kuliah')->insert([
            'id_jadwal' => '05',
            'hari' => 'Rabu',
            'jam' => '13-15',
            'tahun_akademik' => '2022-2023',
            'nidn' => '8031035804',
            'id_matkul' => 'TC221A'
        ]);

        DB::table('jadwal_kuliah')->insert([
            'id_jadwal' => '05',
            'hari' => 'Rabu',
            'jam' => '13-15',
            'tahun_akademik' => '2022-2023',
            'nidn' => '8031035804',
            'id_matkul' => 'TC221A'
        ]);
    }
}
