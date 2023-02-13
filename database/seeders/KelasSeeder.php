<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
<<<<<<< HEAD
        [
            'id_kelas' => 'KLS001',
            'jurusan' => 'JRS001',
            'walas' => '327503275032750872',
            'angkatan' => 'AKT001',
            'tingkatan' => 'X',
            'nama_kelas' => 'A',
            ],
            ];

                DB::table('kelas')->insert($kelas);
                                            
=======
            [
            'id_kelas' => 'KLS001',
            'jurusan' => 'JRS001',
            'walas' => 'WLS001',
            'angkatan' => 'AKT001',
            'tingkatan' => '12',
            'nama_kelas' => 'A'
            ]
        ];

        DB::table('kelas')->insert($kelas);
>>>>>>> 7be6b6171398e8469cc955736142442135385b55
    }
}
