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
        $verifikator = [
        [
            'id_verifikator' => 'VRT001',
            'user' => 'USR002',
            'nip_verifikator' => '23817283178',
            'nama_verifikator' => 'juliii'
            ],
            ];

                DB::table('verifikator')->insert($verifikator);
                                            
    }
}