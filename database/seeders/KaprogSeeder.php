<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class KaprogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kaprog = 
        [
            [
                'id_kaprog' => 'KPR001',
                'user' => 'USR009',
                'nama_kaprog' => 'KAPROG',
                'nip_kaprog' => '009'
            ],
        ];

        DB::table('kaprog')->insert($kaprog);
    }
}
