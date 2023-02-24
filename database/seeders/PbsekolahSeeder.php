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
class PbsekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $pbsekolah = [
        [
            'id_pbsekolah' => 'PBS001',
            'user' => 'USR008',
            'nip_pbsekolah' => '098',
            'nama_pbsekolah' => 'jemjem',
            'telp_pbsekolah' => '0878848927',
            ],
            ];

                DB::table('pb_sekolah')->insert($pbsekolah);
                                            
=======
        $pbsekolah = 
        [
            [
                'id_pbsekolah' => 'PBS001',
                'user' => 'USR004',
                'nama_pbsekolah' => 'PB SEKOLAH',
                'nip_pbsekolah' => '004',
                'telp_pbsekolah' => '004'
            ]
        ];

        DB::table('pb_sekolah')->insert($pbsekolah);
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
