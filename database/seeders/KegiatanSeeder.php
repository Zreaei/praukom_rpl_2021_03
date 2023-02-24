<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kegiatan = 
        [
            [
                'id_kegiatan' => 'KGT001',
                'prakerin' => 'PRK001',
                'foto_kegiatan' => 'kegiatan.jpg',
                'keterangan_kegiatan' => 'belajar',
                'tgl_kegiatan' => '2001-01-01',
                'jam_masuk' => '00:00:00',
                'jam_keluar' => '00:00:00'
            ],
        ];

        DB::table('kegiatan')->insert($kegiatan);
    }
}