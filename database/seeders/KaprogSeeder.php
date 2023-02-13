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
            'id_kaprog' => 'KPR001',
            'user' => 'USR009',
            'nip_kaprog' => '1009',
            'nama_kaprog' => 'nama kaprog'
            ]
        ];

        DB::table('kaprog')->insert($kaprog);
    }
}
