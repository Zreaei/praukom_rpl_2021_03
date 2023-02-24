<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenilaianverifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penilaian_verif = 
        [
            [
                'id_nilaiverif' => '001',
                'siswa' => '123456789',
                'verifikator' => 'VRK001'
            ]
        ];

        DB::table('penilaian_verif')->insert($penilaian_verif);
    }
}