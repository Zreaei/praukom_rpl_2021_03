<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = 
        [
            [
                'nis' => '123456789',
                'user' => 'USR003',
                'kelas' => 'KLS001',
                'nama_siswa' => 'SISWA',
                'tempat_lahir' => 'TEMPAT',
                'tgl_lahir' => '2001-01-01',
                'telp_siswa' => '003'
            ]
        ];

        DB::table('siswa')->insert($siswa);
    }
}
