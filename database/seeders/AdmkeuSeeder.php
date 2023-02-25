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
         $admkeu = [
        [
            'id_admkeu' => 'ADK001',
            'user' => 'USR004',
            'nama_admkeu' => 'sri',
        ],
    ];

        DB::table('adm_keuangan')->insert($admkeu);
                                            
    }
}
