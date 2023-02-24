<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monitoring = 
        [
            [
                'id_monitoring' => 'MNT001',
                'prakerin' => 'PRK001',
                'pb_sekolah' => 'PBS001',
                'tgl_monitoring' => '2001-01-01',
                'laporan_monitoring' => 'monitoring'
            ],
        ];

        DB::table('monitoring')->insert($monitoring);
    }
}
