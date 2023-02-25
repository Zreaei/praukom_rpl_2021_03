<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SertifikatpklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sertifikat_pkl = 
        [
            [
                'id_sertifpkl' => '001',
                'id_nilaipkl' => '001'
            ]
        ];

        DB::table('sertifikat_pkl')->insert($sertifikat_pkl);
    }
}