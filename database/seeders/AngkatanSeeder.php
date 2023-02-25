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
class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $angkatan = [
        [
            'id_angkatan' => 'AKT001',
            'tahun_angkatan' => '2023',
            ],
            ];

                DB::table('angkatan')->insert($angkatan);
                                            
=======
        $angkatan = 
        [
            [
                'id_angkatan' => 'AKT001',
                'tahun_angkatan' => '2021/2022'
            ],
        ];

        DB::table('angkatan')->insert($angkatan);
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
