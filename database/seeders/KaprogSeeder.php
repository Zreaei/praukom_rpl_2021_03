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
        $kaprog = [
        [
            'nip_kaprog' => '123456781234567891',
            'user' => 'USR005',
            'nama_kaprog' => 'agus',
            ],
            ];

                DB::table('kaprog')->insert($kaprog);
                                            
    }
}
