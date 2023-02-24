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
class WkhubinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $wkhubin = [
        [
            'id_wkhubin' => '123456',
            'nip_wkhubin' => '098765432112345678',
            'user' => 'USR004',
            'nama_wkhubin' => 'Aulll',
            ],
            ];

                DB::table('waka_hubin')->insert($wkhubin);
                                            
=======
        $wkhubin = 
        [
            [
                'id_wkhubin' => 'WKH001',
                'user' => 'USR008',
                'nama_wkhubin' => 'WAKA HUBIN',
                'nip_wkhubin' => '008'
            ]
        ];

        DB::table('waka_hubin')->insert($wkhubin);
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
