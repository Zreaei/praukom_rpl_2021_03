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
class KaprogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $kaprog = [
        [
            'id_kaprog' => '987654',
            'nip_kaprog' => '123456781234567891',
            'user' => 'USR006',
            'nama_kaprog' => 'agus',
            ],
            ];

                DB::table('kaprog')->insert($kaprog);
                                            
=======
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
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
}
