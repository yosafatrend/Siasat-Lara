<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  $table->id('id_khs');
    //  $table->string('nim');
    //  $table->integer('total_sks')->nullable();
    //  $table->string('tahun_akademik')->nullable();
    //  $table->string('ips')->nullable();

    //  $table->foreign('nim')->references('nim')->on('mahasiswa');

    public function run(): void
    {
        DB::table('khs')->insert([
            'id_khs' => 'A1',
            'nim' => '672021054',
            'total_sks' => 5,
            'tahun_akademik' => '2022-2023',
            'ips' => '3,94'
        ]);
    }
}
