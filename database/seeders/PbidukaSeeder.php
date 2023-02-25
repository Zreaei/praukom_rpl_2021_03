<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PbidukaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pbiduka = 
        [
            [
                'nik' => '1234567812345678',
                'user' => 'USR005',
                'nama_pbiduka' => 'PB IDUKA',
                'telp_pbiduka' => '005'
            ]
        ];

        DB::table('pb_iduka')->insert($pbiduka);
    }
}
