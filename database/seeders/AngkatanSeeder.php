<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $angkatan = 
        [
            [
                'id_angkatan' => 'AKT001',
                'tahun_angkatan' => '2021/2022'
            ],
        ];

        DB::table('angkatan')->insert($angkatan);
    }
}
