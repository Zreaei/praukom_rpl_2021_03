<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenilaianpklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penilaian_pkl = 
        [
            [
                'id_nilaipkl' => '001',
                'siswa' => '123456789',
                'pb_iduka' => '1234567812345678'
            ]
        ];

        DB::table('penilaian_pkl')->insert($penilaian_pkl);
    }
}