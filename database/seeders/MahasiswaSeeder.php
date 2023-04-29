<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nim' => '672021111',
            'nama_mhs' => 'Febrianus Valent',
            'tempat_lahir' => 'Tenggarong',
            'tanggal_lahir' => Carbon::create('2003', '02', '12'),
            'alamat' => 'Salatiga, Jawa Tengah',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Informatika',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);
        DB::table('mahasiswa')->insert([
            'nim' => '672021999',
            'nama_mhs' => 'amiya mawar',
            'tempat_lahir' => 'jawa barat',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'alamat' => 'Salatiga, Jawa Tengah',
            'jenis_kelamin' => 'P',
            'prodi' => 'Teknik Informatika',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);
        DB::table('mahasiswa')->insert([
            'nim' => '672021998',
            'nama_mhs' => 'ronaldowati',
            'tempat_lahir' => 'cirebon',
            'tanggal_lahir' => Carbon::create('2000', '01', '11'),
            'alamat' => 'Salatiga, Jawa Tengah',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Informatika',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021001',
            'nama_mhs' => 'Siti Nurul Aini',
            'tempat_lahir' => 'Lombok',
            'tanggal_lahir' => Carbon::create('2000', '05', '15'),
            'alamat' => 'Jl. Gajah Mada No. 5, Kota Mataram, Nusa Tenggara Barat',
            'jenis_kelamin' => 'P',
            'prodi' => 'Teknik Elektro',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021002',
            'nama_mhs' => 'Ferdi Saputra',
            'tempat_lahir' => 'Surabaya',
            'tanggal_lahir' => Carbon::create('1999', '07', '21'),
            'alamat' => 'Jl. Mayjen Sungkono No. 56, Kota Surabaya, Jawa Timur',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Sipil',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021003',
            'nama_mhs' => 'Ayu Anjani',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => Carbon::create('2001', '02', '14'),
            'alamat' => 'Jl. Merdeka No. 15, Kota Bandung, Jawa Barat',
            'jenis_kelamin' => 'P',
            'prodi' => 'Ekonomi',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021004',
            'nama_mhs' => 'Aldi Putra',
            'tempat_lahir' => 'Makassar',
            'tanggal_lahir' => Carbon::create('2000', '09', '29'),
            'alamat' => 'Jl. Andi Makkasau No. 22, Kota Makassar, Sulawesi Selatan',
            'jenis_kelamin' => 'L',
            'prodi' => 'Hukum',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021005',
            'nama_mhs' => 'Yulia Dewi',
            'tempat_lahir' => 'Medan',
            'tanggal_lahir' => Carbon::create('1999', '12', '31'),
            'alamat' => 'Jl. Thamrin No. 10, Kota Medan, Sumatera Utara',
            'jenis_kelamin' => 'P',
            'prodi' => 'Teknik Kimia',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021056',
            'nama_mhs' => 'Cindy Novitasari',
            'tempat_lahir' => 'Semarang',
            'tanggal_lahir' => Carbon::create('2001', '05', '20'),
            'alamat' => 'Jl. Veteran No. 123, Semarang, Jawa Tengah',
            'jenis_kelamin' => 'P',
            'prodi' => 'Akuntansi',
            'jenjang' => 'S1',
            'tahun' => '2020'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021057',
            'nama_mhs' => 'Rendi Budi Santoso',
            'tempat_lahir' => 'Surakarta',
            'tanggal_lahir' => Carbon::create('1999', '11', '11'),
            'alamat' => 'Jl. Danau Toba No. 17, Surakarta, Jawa Tengah',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Sipil',
            'jenjang' => 'S1',
            'tahun' => '2019'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021058',
            'nama_mhs' => 'Sari Wulandari',
            'tempat_lahir' => 'Sidoarjo',
            'tanggal_lahir' => Carbon::create('2002', '02', '14'),
            'alamat' => 'Jl. Raya Taman No. 7, Sidoarjo, Jawa Timur',
            'jenis_kelamin' => 'P',
            'prodi' => 'Ekonomi Pembangunan',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021059',
            'nama_mhs' => 'Dimas Aditya Nugroho',
            'tempat_lahir' => 'Jember',
            'tanggal_lahir' => Carbon::create('1998', '09', '15'),
            'alamat' => 'Jl. Dr. Cipto No. 11, Jember, Jawa Timur',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Elektro',
            'jenjang' => 'S1',
            'tahun' => '2018'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021060',
            'nama_mhs' => 'Nia Kurniawati',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => Carbon::create('2003', '07', '03'),
            'alamat' => 'Jl. Sudirman No. 56, Jakarta Selatan',
            'jenis_kelamin' => 'P',
            'prodi' => 'Ilmu Komunikasi',
            'jenjang' => 'S1',
            'tahun' => '2022'
        ]);

        DB::table('mahasiswa')->insert([
            'nim' => '672021054',
            'nama_mhs' => 'Amoksa Pandega',
            'tempat_lahir' => 'Ambarawa',
            'tanggal_lahir' => Carbon::create('2003', '28', '10'),
            'alamat' => 'Perumahan Pondok Banyubiru',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Informasi',
            'jenjang' => 'S1',
            'tahun' => '2021'
        ]);
    }
}
