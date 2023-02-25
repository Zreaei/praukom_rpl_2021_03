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
class PbidukaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $pbiduka = [
        [
            'nik' => '1111111111111111',
            'user' => 'USR008',
            'nama_pbiduka' => 'bale',
            'telp_pbiduka' => '087880007',
            ],
            ];

                DB::table('pb_iduka')->insert($pbiduka);
                                            
=======
        $pbiduka = 
        [
            [
                'nik' => '1234567812345678',
                'user' => 'USR005',
                'nama_pbiduka' => 'PB IDUKA',
                'telp_pbiduka' => '005'
            ]
        ];

        DB::table('pb_iduka')->insert($pbiduka);
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
