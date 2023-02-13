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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_walas");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_walas(datauser CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datawalas CHAR(6), datanip_walas VARCHAR(20), datanama_walas VARCHAR(50))
                BEGIN
                UPDATE user SET username = datausername, password = datapassword, email = dataemail, foto_user = datafoto_user
                WHERE id_user = datauser;
                UPDATE walas SET nip_walas = datanip_walas, nama_walas = datanama_walas
                WHERE id_walas = datawalas;
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
        Schema::dropIfExists('procedure_update_walas');
    }
};