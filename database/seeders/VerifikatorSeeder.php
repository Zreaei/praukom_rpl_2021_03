<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class VerifikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verifikator = 
        [
            [
                'id_verifikator' => 'VRK001',
                'user' => 'USR010',
                'nama_verifikator' => 'verifikator',
                'nip_verifikator' => '010'
            ]
        ];

        DB::table('verifikator')->insert($verifikator);
    }
}
