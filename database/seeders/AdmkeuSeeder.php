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
<<<<<<< HEAD
            'id_admkeu' => 'ADK001',
            'user' => 'USR004',
            'nama_admkeu' => 'sri',
=======
            [
                'id_admkeu' => 'ADK001',
                'user' => 'USR003'
>>>>>>> e01679e195840334664fe728166a85886559141a
            ],
            ];

                DB::table('adm_keuangan')->insert($admkeu);
                                            
    }
}
