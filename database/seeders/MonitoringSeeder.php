<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monitoring = [
        [
            'id_monitoring' => 'MNT001',
            'pb_sekolah' => 'PBS001',
            'tgl_monitoring' => '2023-02-01',
            'laporan_monitoring' => '1',
            ],
            ];

                DB::table('monitoring')->insert($monitoring);
                                            
    }
}
