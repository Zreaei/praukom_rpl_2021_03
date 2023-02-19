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
            'id_walas' => '123666',
            'nip_walas' => '098765432112345699',
            'user' => 'USR004',
            'nama_walas' => 'satria',
            ],
            ];

                DB::table('walas')->insert($walas);
                                            
    }
}
