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
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $siswa = [
        [
            'nis' => '327584763',
            'user' => 'USR002',
            'kelas' => 'KLS001',
            'nama_siswa' => 'Danar',
            'tempat_lahir' => 'Bekasi',
            'tgl_lahir' => '2005-11-22',
            'telp_siswa' => '087874588726'
            ],
            ];

                DB::table('siswa')->insert($siswa);
                                            
    }
}
=======
        $siswa = 
        [
            [
                'nis' => '123456789',
                'user' => 'USR003',
                'kelas' => 'KLS001',
                'nama_siswa' => 'SISWA',
                'tempat_lahir' => 'TEMPAT',
                'tgl_lahir' => '2001-01-01',
                'telp_siswa' => '003'
            ]
        ];

        DB::table('siswa')->insert($siswa);
    }
}
>>>>>>> e01679e195840334664fe728166a85886559141a
