<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

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
