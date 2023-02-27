<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengajuan = 
        [
            [
                'id_pengajuan' => 'PNJ001',
                'admkeu' => 'ADK001',
                'wkhubin' => 'WKH001',
                'siswa' => '123456789',
                'kaprog' => 'KPR001',
                'walas' => 'WLS001',
                'iduka' => 'IDK001',
                'tgl_pengajuan' => '2001-01-01',
                'konfirmasi_walas' => 'pending',
                'konfirmasi_admkeu' => 'pending',
                'konfirmasi_wkhubin' => 'pending',
                'konfirmasi_kaprog' => 'pending'

            ],
        ];

        DB::table('pengajuan')->insert($pengajuan);
    }
}
