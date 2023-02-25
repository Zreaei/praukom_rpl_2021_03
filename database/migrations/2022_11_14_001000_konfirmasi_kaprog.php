<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS konfirmasi_kaprog");
        DB::unprepared(
          "CREATE PROCEDURE konfirmasi_kaprog(datapengajuan CHAR(6), datakonfirmasi enum('belum', 'terima', 'tolak'))
                BEGIN
                UPDATE pengajuan SET konfirmasi_kaprog = datakonfirmasi
                WHERE id_pengajuan = datapengajuan;
          END;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasi_kaprog');
    }
};