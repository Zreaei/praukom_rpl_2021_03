<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $absensi = 
        [
            [
                'id_absensi' => '001',
                'id_presensi' => '001',
                'tgl_presensi' => '2001-01-01',
                'keterangan_presensi' => 'sakit hati',
                'status_presensi' => 'sakit',
                'konfirmasi_pbsekolah' => 'pending',
                'konfirmasi_pbiduka' => 'pending'
            ],[
                'id_absensi' => '002',
                'id_presensi' => '001',
                'tgl_presensi' => '2002-02-02',
                'keterangan_presensi' => '',
                'status_presensi' => 'hadir',
                'konfirmasi_pbsekolah' => 'pending',
                'konfirmasi_pbiduka' => 'pending'
            ]
        ];

        DB::table('absensi')->insert($absensi);
    }
}
