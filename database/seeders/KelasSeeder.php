<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = 
        [
            [
                'id_kelas' => 'KLS001',
                'jurusan' => 'JRS001',
                'walas' => 'WLS001',
                'angkatan' => 'AKT001',
                'tingkatan' => '12',
                'nama_kelas' => 'A'
            ], [
                'id_kelas' => 'KLS002',
                'jurusan' => 'JRS001',
                'walas' => 'WLS002',
                'angkatan' => 'AKT001',
                'tingkatan' => '12',
                'nama_kelas' => 'B'
            ], [
                'id_kelas' => 'KLS003',
                'jurusan' => 'JRS001',
                'walas' => 'WLS003',
                'angkatan' => 'AKT001',
                'tingkatan' => '12',
                'nama_kelas' => 'C'
            ]
        ];

        DB::table('kelas')->insert($kelas);
    }
}
