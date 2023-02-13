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
<<<<<<< HEAD
        [
            'nip_walas' => '327503275032750872',
            'user' => 'USR002',
            'nama_walas' => 'satria',
            ],
            ];

                DB::table('walas')->insert($walas);
                                            
=======
            [
            'id_walas' => 'WLS001',
            'user' => 'USR006',
            'nip_walas' => '1006',
            'nama_walas' => 'nama walas'
            ]
        ];

        DB::table('walas')->insert($walas);
>>>>>>> 7be6b6171398e8469cc955736142442135385b55
    }
}
