<?php

namespace Database\Seeders;

<<<<<<< HEAD
// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

>>>>>>> e01679e195840334664fe728166a85886559141a
class WalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $walas = [
        [
            'id_walas' => '123666',
            'nip_walas' => '098765432112345699',
            'user' => 'USR004',
            'nama_walas' => 'satria',
            ],
            ];

                DB::table('walas')->insert($walas);
                                            
=======
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
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
