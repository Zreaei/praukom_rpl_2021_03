<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
        [
            'nis' => '327584763',
            'user' => 'USR001',
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
