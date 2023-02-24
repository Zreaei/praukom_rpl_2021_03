<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $presensi = 
        [
            [
                'id_presensi' => 'PRS001',
                'prakerin' => 'PRK001',
                'pb_iduka' => '1234567812345678',
                'pb_sekolah' => 'PBS001',
                'tgl_presensi' => '2001-01-01',
                'keterangan_presensi' => 'sakit hati',
                'status_presensi' => 'sakit',
                'konfirmasi_pbsekolah' => 'terima',
                'konfirmasi_pbiduka' => 'terima'
            ],
        ];

        DB::table('presensi')->insert($presensi);
    }
}
