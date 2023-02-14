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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_pengajuan");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_pengajuan(
            dataiduka CHAR(6), 
            datanamaiduka VARCHAR(50), 
            datapimpinaniduka VARCHAR(50), 
            dataalamatiduka VARCHAR(100), 
            datatelpiduka VARCHAR(20), 
            datapengajuan CHAR(6), 
            datatglpengajuan DATE)
                BEGIN
                UPDATE iduka SET nama_iduka = datanamaiduka, pimpinan_iduka = datapimpinaniduka, alamat_iduka = dataalamatiduka, telp_iduka = datatelpiduka
                WHERE id_iduka = dataiduka;
                UPDATE pengajuan SET tgl_pengajuan = datatglpengajuan
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
        Schema::dropIfExists('procedure_update_admkeu');
    }
};