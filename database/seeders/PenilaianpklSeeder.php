<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class PenilaianpklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
