<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrakerinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prakerin = 
        [
            [
                'id_prakerin' => 'PRK001',
                'pengajuan' => 'PNJ001',
                'siswa' => '123456789',
                'iduka' => 'IDK001',
                'status_prakerin' => 'sudah lulus',
                'tgl_mulai' => '2023-02-01',
                'tgl_selesai' => '2023-02-22'
            ],
        ];

        DB::table('prakerin')->insert($prakerin);
    }
}
