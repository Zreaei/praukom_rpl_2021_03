<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $angkatan = [
<<<<<<< HEAD
        [
            'id_angkatan' => 'AKT001',
            'tahun_angkatan' => '2023',
            ],
            ];

                DB::table('angkatan')->insert($angkatan);
                                            
=======
            [
            'id_angkatan' => 'AKT001',
            'tahun_angkatan' => '2020/2021'
            ]
        ];

        DB::table('angkatan')->insert($angkatan);
>>>>>>> 7be6b6171398e8469cc955736142442135385b55
    }
}
