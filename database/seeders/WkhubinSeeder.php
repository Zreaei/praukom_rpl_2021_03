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
        $wkhubin = [
        [
            'nip_wkhubin' => '098765432112345678',
            'user' => 'USR004',
            'nama_wkhubin' => 'Aulll',
            ],
            ];

                DB::table('waka_hubin')->insert($wkhubin);
                                            
    }
}
