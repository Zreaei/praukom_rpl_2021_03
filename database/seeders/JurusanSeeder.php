<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = 
        [
            [
                'id_jurusan' => 'JRS001',
                'kaprog' => 'KPR001',
                'bidang_keahlian' => 'Informatika',
                'program_keahlian' => 'RPL'
            ],
            [
                'id_jurusan' => 'JRS002',
                'kaprog' => 'KPR001',
                'bidang_keahlian' => 'Informatika',
                'program_keahlian' => 'TKJ'
            ],
        ];

        DB::table('jurusan')->insert($jurusan);
    }
}
