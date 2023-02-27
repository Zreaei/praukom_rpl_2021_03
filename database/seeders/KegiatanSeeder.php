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
                'id_kegiatan' => '001',
                'prakerin' => 'PRK001'
            ],
        ];

        DB::table('kegiatan')->insert($kegiatan);
    }
}