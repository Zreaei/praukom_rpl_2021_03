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
class PenilaianpklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $penilaianpkl = [
        [
            'id_nilaipkl' => '001',
            'siswa' => '327584763',
            'pb_iduka' => '1111111111111111',
            ],
            ];

                DB::table('penilaian_pkl')->insert($penilaianpkl);
                                            
    }
}
=======
        $penilaian_pkl = 
        [
            [
                'id_nilaipkl' => '001',
                'siswa' => '123456789',
                'pb_iduka' => '1234567812345678'
            ]
        ];

        DB::table('penilaian_pkl')->insert($penilaian_pkl);
    }
}
>>>>>>> e01679e195840334664fe728166a85886559141a
