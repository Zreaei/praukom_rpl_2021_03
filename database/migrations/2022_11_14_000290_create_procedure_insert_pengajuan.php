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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_insert_pengajuan");
        DB::unprepared(
          "CREATE PROCEDURE procedure_insert_pengajuan(
            datanamaiduka VARCHAR(50), 
            datapimpinaniduka VARCHAR(50), 
            dataalamatiduka VARCHAR(100),
            datatelpiduka VARCHAR(20), 
            datasiswa CHAR(9), 
            dataadmkeu CHAR(6), 
            datawkhubin CHAR(18), 
            datakaprog CHAR(18), 
            datawalas CHAR(18), 
            datatglpengajuan DATE)
            
                BEGIN
                DECLARE kodeiduka CHAR(6);
                DECLARE kodepengajuan CHAR(6);
                SELECT generate_new_id_iduka() INTO kodeiduka;
                SELECT generate_new_id_pengajuan() INTO kodepengajuan;
                INSERT INTO iduka (id_iduka, nama_iduka, pimpinan_iduka, alamat_iduka, telp_iduka) VALUES(kodeiduka, datanamaiduka, datapimpinaniduka, dataalamatiduka, datatelpiduka);
                INSERT INTO pengajuan (id_pengajuan, siswa, iduka, admkeu, wkhubin, kaprog, walas, tgl_pengajuan) VALUES(kodepengajuan, datasiswa, kodeiduka, dataadmkeu, datawkhubin, datakaprog, datawalas, datatglpengajuan);
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
        Schema::dropIfExists('procedure_insert_admkeu');
    }
};