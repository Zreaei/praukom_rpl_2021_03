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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_insert_monitoring");
        DB::unprepared(
          "CREATE PROCEDURE procedure_insert_monitoring(datapbsekolah CHAR(6), dataprakerin CHAR(6), datatgl DATE, datalaporan VARCHAR(255))
                BEGIN
                DECLARE kodemonitoring CHAR(6);
                SELECT generate_new_kode_monitoring() INTO kodemonitoring;
                INSERT INTO monitoring (id_monitoring, pb_sekolah, prakerin, tgl_monitoring, laporan_monitoring) VALUES(kodemonitoring, datapbsekolah, dataprakerin, datatgl, datalaporan);
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
        Schema::dropIfExists('procedure_insert_monitoring');
    }
};