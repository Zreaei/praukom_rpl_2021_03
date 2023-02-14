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
            'user' => 'USR007',
            'nama_admkeu' =>'ADM Keuangan 1'
            ]
        ];

        DB::table('adm_keuangan')->insert($admkeu);
    }
}
