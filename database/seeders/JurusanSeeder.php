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
        $jurusan = [
<<<<<<< HEAD
        [
            'id_jurusan' => 'JRS001',
            'kaprog' => '123456781234567891',
            'bidang_keahlian' => 'it',
            'program_keahlian' => 'rpl',
            ],
            ];

                DB::table('jurusan')->insert($jurusan);
                                            
=======
            [
            'id_jurusan' => 'JRS001',
            'kaprog' => 'KPR001',
            'bidang_keahlian' => 'IT',
            'program_keahlian' => 'Rekayasa Perangkat Lunak'
            ]
        ];

        DB::table('jurusan')->insert($jurusan);
>>>>>>> 7be6b6171398e8469cc955736142442135385b55
    }
}
