<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert([
            'nidn' => '8031035804',
            'nama_dsn' => 'Achmad Iqbal',
            'tempat_lahir' => 'Salatiga',
            'tanggal_lahir' => Carbon::create('1990', '07', '18'),
            'alamat' => 'Surabaya, Jawa Timur',
            'jenis_kelamin' => 'L'
        ]);

        DB::table('dosen')->insert([
            'nidn' => '6229078163',
            'nama_dsn' => 'Ahmad Iqbal',
            'tempat_lahir' => 'Surabaya',
            'tanggal_lahir' => Carbon::create('1992', '03', '25'),
            'alamat' => 'Blitar, Jawa Timur',
            'jenis_kelamin' => 'L'
        ]);

        DB::table('dosen')->insert([
            'nidn' => '0012106704',
            'nama_dsn' => 'Ahmad Iqbal Baqi',
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => Carbon::create('1987', '11', '03'),
            'alamat' => 'Tegal, Jawa Tengah',
            'jenis_kelamin' => 'L'
        ]);

        DB::table('dosen')->insert([
            'nidn' => '0015126901',
            'nama_dsn' => 'Andi Iqbal',
            'tempat_lahir' => 'Bulukumba',
            'tanggal_lahir' => Carbon::create('1996', '02', '12'),
            'alamat' => 'Makassar, Sulawesi Selatan',
            'jenis_kelamin' => 'L'
        ]);

        DB::table('dosen')->insert([
            'nidn' => '3910004879',
            'nama_dsn' => 'Muhammad Iqbal',
            'tempat_lahir' => 'Kisaran',
            'tanggal_lahir' => Carbon::create('1990', '08', '17'),
            'alamat' => 'Medan, Sumatera Utara',
            'jenis_kelamin' => 'L'
        ]);
    }
}
