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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_verifikator");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_verifikator(datauser CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), dataverifikator CHAR(6), datanip_verifikator VARCHAR(20), datanama_verifikator VARCHAR(50))
                BEGIN
                UPDATE user SET username = datausername, password = datapassword, email = dataemail, foto_user = datafoto_user
                WHERE id_user = datauser;
                UPDATE verifikator SET nip_verifikator = datanip_verifikator, nama_verifikator = datanama_verifikator
                WHERE id_verifikator = dataverifikator;
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
        Schema::dropIfExists('procedure_update_verifikator');
    }
};