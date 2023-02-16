<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class PbsekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
                                            
    }
}
