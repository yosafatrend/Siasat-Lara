<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->id('id_matkul');
        // $table->string('nama matkul')->nullable();
        // $table->integer('semester')->nullable();
        // $table->integer('sks')->nullable();

        DB::table('mata_kuliah')->insert([
            'id_matkul' => 'TC225D',
            'nama matkul' => 'Sistem Operasi',
            'semester' => 4,
            'sks' => 4
        ]);

        DB::table('mata_kuliah')->insert([
            'id_matkul' => 'DX402D',
            'nama matkul' => 'Kesehatan Masyarakat',
            'semester' => 2,
            'sks' => 3
        ]);

        DB::table('mata_kuliah')->insert([
            'id_matkul' => 'TC224C',
            'nama matkul' => 'Kecerdasan Buatan',
            'semester' => 4,
            'sks' => 4
        ]);

        DB::table('mata_kuliah')->insert([
            'id_matkul' => 'TC223H',
            'nama matkul' => 'Pemograman Web',
            'semester' => 4,
            'sks' => 4
        ]);

        DB::table('mata_kuliah')->insert([
            'id_matkul' => 'TC221A',
            'nama matkul' => 'Statistika dan Probabilitas',
            'semester' => 4,
            'sks' => 2
        ]);

        DB::table('mata_kuliah')->insert([
            'id_matkul' => 'IN122G',
            'nama matkul' => 'Pendidikan Pancasila',
            'semester' => 3,
            'sks' => 2
        ]);

        DB::table('mata_kuliah')->insert([
            'id_matkul' => 'F204H',
            'nama matkul' => 'Etika Profesi',
            'semester' => 4,
            'sks' => 2
        ]);
    }
}
