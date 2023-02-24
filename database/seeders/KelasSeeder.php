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
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $kelas = [
        [
            'id_kelas' => 'KLS001',
            'jurusan' => 'JRS001',
            'walas' => '123666',
            'angkatan' => 'AKT001',
            'tingkatan' => 'X',
            'nama_kelas' => 'A',
            ],
            ];

                DB::table('kelas')->insert($kelas);
                                            
=======
        $kelas = 
        [
            [
                'id_kelas' => 'KLS001',
                'jurusan' => 'JRS001',
                'walas' => 'WLS001',
                'angkatan' => 'AKT001',
                'tingkatan' => '12',
                'nama_kelas' => 'A'
            ], [
                'id_kelas' => 'KLS002',
                'jurusan' => 'JRS001',
                'walas' => 'WLS002',
                'angkatan' => 'AKT001',
                'tingkatan' => '12',
                'nama_kelas' => 'B'
            ], [
                'id_kelas' => 'KLS003',
                'jurusan' => 'JRS001',
                'walas' => 'WLS003',
                'angkatan' => 'AKT001',
                'tingkatan' => '12',
                'nama_kelas' => 'C'
            ]
        ];

        DB::table('kelas')->insert($kelas);
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
