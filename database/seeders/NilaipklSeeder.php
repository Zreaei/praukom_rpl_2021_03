<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaipklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nilai_pkl = 
        [
            [
                'id_nilaipkl' => '001',
                'kategori_nilai' => 'KTN001',
                'nilai_pkl' => '100'
            ],[
                'id_nilaiverif' => '001',
                'kategori_nilai' => 'KTN002',
                'nilai_pkl' => '90'
            ],
        ];

        DB::table('nilai_pkl')->insert($nilai_pkl);
    }
}