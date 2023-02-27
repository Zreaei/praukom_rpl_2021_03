<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WkhubinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wkhubin = 
        [
            [
                'id_wkhubin' => 'WKH001',
                'user' => 'USR008',
                'nama_wkhubin' => 'WAKA HUBIN',
                'nip_wkhubin' => '008'
            ]
        ];

        DB::table('waka_hubin')->insert($wkhubin);
    }
}
