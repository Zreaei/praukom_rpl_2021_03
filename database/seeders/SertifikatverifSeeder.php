<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SertifikatverifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sertifikat_verif = 
        [
            [
                'id_sertifverif' => '001',
                'id_nilaiverif' => '001'
            ]
        ];

        DB::table('sertifikat_verif')->insert($sertifikat_verif);
    }
}