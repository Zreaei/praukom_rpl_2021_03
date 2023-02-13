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
        $walas = [
            [
            'id_walas' => 'WLS001',
            'user' => 'USR006',
            'nip_walas' => '1006',
            'nama_walas' => 'nama walas'
            ]
        ];

        DB::table('walas')->insert($walas);
    }
}
