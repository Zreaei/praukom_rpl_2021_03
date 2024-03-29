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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_insert_prakerin");
        DB::unprepared(
          "CREATE PROCEDURE procedure_insert_prakerin(dataprakerin CHAR(6), datatgl DATE, datapbiduka CHAR(18), datapbsekolah CHAR(6), datastatus enum('hadir', 'sakit', 'izin', 'alfa'), dataket text)
                BEGIN
                DECLARE id_prakerin CHAR(6);
                SELECT generate_new_id_prakerin() INTO id_prakerin;
                INSERT INTO presensi (id_presensi, prakerin, tgl_presensi, pb_iduka, pb_sekolah, status_presensi, keterangan_presensi) VALUES(id_presensi, dataprakerin, datatgl, datapbiduka, datapbsekolah, datastatus, dataket);
                UPDATE prakerin SET tgl_selesai = datatgl
                WHERE id_prakerin = dataprakerin;
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
        Schema::dropIfExists('procedure_insert_prakerin');
    }
};