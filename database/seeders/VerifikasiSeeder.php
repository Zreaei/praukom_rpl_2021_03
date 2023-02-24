<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verifikasi = 
        [
            [
                'id_verifikasi' => 'VRS001',
                'siswa' => '123456789',
                'verifikator' => 'VRK001',
                'tgl_verifikasi' => '2001-01-01',
                'bukti_verifikasi' => 'bukti.pdf'
            ],
        ];

        DB::table('verifikasi')->insert($verifikasi);
    }
}
