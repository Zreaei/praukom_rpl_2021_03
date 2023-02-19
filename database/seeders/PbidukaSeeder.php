<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class PbidukaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pbiduka = [
        [
            'nik' => '1111111111111111',
            'user' => 'USR008',
            'nama_pbiduka' => 'bale',
            'telp_pbiduka' => '087880007',
            ],
            ];

                DB::table('pb_iduka')->insert($pbiduka);
                                            
    }
}
