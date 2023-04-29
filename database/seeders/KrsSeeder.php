<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // $table->id('id_krs');
    // $table->string('nim');
    // $table->integer('semester')->nullable();
    // $table->string('tahun_akademik')->nullable();
    // $table->string('ips')->nullable();

    // $table->foreign('nim')->references('nim')->on('mahasiswa');

    public function run(): void
    {
        DB::table('krs')->insert([
            'id_krs' => '1A',
            'nim' => '672021054',
            'semester' => 4,
            'tahun_akademik' => '2022-2023',
            'ips' => '3,94'
        ]);
    }
}
