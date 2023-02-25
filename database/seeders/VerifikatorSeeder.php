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
class VerifikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> e01679e195840334664fe728166a85886559141a
