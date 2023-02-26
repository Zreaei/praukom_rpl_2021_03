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
                'id_presensi' => '001',
                'prakerin' => 'PRK001',
                'pb_iduka' => '1234567812345678',
                'pb_sekolah' => 'PBS001'
            ],
        ];

        DB::table('presensi')->insert($presensi);
    }
}
