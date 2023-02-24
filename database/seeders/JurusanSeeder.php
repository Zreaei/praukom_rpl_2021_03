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
class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $jurusan = [
        [
            'id_jurusan' => 'JRS001',
            'kaprog' => '987654',
            'bidang_keahlian' => 'it',
            'program_keahlian' => 'rpl',
            ],
            ];

                DB::table('jurusan')->insert($jurusan);
                                            
=======
        $jurusan = 
        [
            [
                'id_jurusan' => 'JRS001',
                'kaprog' => 'KPR001',
                'bidang_keahlian' => 'Informatika',
                'program_keahlian' => 'RPL'
            ],
        ];

        DB::table('jurusan')->insert($jurusan);
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
