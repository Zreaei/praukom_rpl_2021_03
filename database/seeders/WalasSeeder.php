<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class WalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $walas = 
        [
            [
                'id_walas' => 'WLS001',
                'user' => 'USR006',
                'nama_walas' => 'WALAS',
                'nip_walas' => '006'
            ], [
                'id_walas' => 'WLS002',
                'user' => 'USR011',
                'nama_walas' => 'WALAS B',
                'nip_walas' => '011'
            ], [
                'id_walas' => 'WLS003',
                'user' => 'USR012',
                'nama_walas' => 'WALAS C',
                'nip_walas' => '012'
            ]
        ];

        DB::table('walas')->insert($walas);
    }
}
