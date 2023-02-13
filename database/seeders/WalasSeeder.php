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
            'nip_walas' => '327503275032750872',
            'user' => 'USR002',
            'nama_walas' => 'satria',
            ],
            ];

                DB::table('walas')->insert($walas);
                                            
    }
}
