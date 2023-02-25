<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PbsekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pbsekolah = 
        [
            [
                'id_pbsekolah' => 'PBS001',
                'user' => 'USR004',
                'nama_pbsekolah' => 'PB SEKOLAH',
                'nip_pbsekolah' => '004',
                'telp_pbsekolah' => '004'
            ]
        ];

        DB::table('pb_sekolah')->insert($pbsekolah);
    }
}
