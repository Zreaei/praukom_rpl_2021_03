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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_insert_verifikator");
        DB::unprepared(
          "CREATE PROCEDURE procedure_insert_verifikator(datalevel CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datanip_verifikator VARCHAR(20), datanama_verifikator VARCHAR(50))
                BEGIN
                DECLARE kodeuser CHAR(6);
                DECLARE kodeverifikator CHAR(6);
                SELECT generate_new_kode_user() INTO kodeuser;
                SELECT generate_new_kode_verifikator() INTO kodeverifikator;
                INSERT INTO user (id_user, level, username, password, email, foto_user) VALUES(kodeuser, datalevel, datausername, datapassword, dataemail, datafoto_user);
                INSERT INTO verifikator (id_verifikator, user, nip_verifikator, nama_verifikator) VALUES(kodeverifikator, kodeuser, datanip_verifikator, datanama_verifikator);
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
        Schema::dropIfExists('procedure_insert_verifikator');
    }
};