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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_insert_walas");
        DB::unprepared(
          "CREATE PROCEDURE procedure_insert_walas(datalevel CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datanip_walas VARCHAR(20), datanama_walas VARCHAR(50))
                BEGIN
                DECLARE kodeuser CHAR(6);
                DECLARE kodewalas CHAR(6);
                SELECT generate_new_kode_user() INTO kodeuser;
                SELECT generate_new_kode_walas() INTO kodewalas;
                INSERT INTO user (id_user, level, username, password, email, foto_user) VALUES(kodeuser, datalevel, datausername, datapassword, dataemail, datafoto_user);
                INSERT INTO walas (id_walas, user, nip_walas, nama_walas) VALUES(kodewalas, kodeuser, datanip_walas, datanama_walas);
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
        Schema::dropIfExists('procedure_insert_walas');
    }
};