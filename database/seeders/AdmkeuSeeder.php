<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class AdmkeuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         $admkeu = [
        [
            'id_admkeu' => 'ADK001',
            'user' => 'USR003',
            'nama_admkeu' => 'yanto',
            ],
            ];

                DB::table('adm_keuangan')->insert($admkeu);
                                            
=======
        $admkeu = [
            [
            'id_admkeu' => 'ADK001',
            'user' => 'USR007',
            ]
        ];

        DB::table('adm_keuangan')->insert($admkeu);
>>>>>>> 7be6b6171398e8469cc955736142442135385b55
    }
}