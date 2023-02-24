<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiverifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nilai_verif = 
        [
            [
                'id_nilaiverif' => '001',
                'kategori_nilai' => 'KTN001',
                'nilai_verif' => '100'
            ],[
                'id_nilaiverif' => '001',
                'kategori_nilai' => 'KTN002',
                'nilai_verif' => '90'
            ],
        ];

        DB::table('nilai_verif')->insert($nilai_verif);
    }
}