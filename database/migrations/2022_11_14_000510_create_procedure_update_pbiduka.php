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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_pbiduka");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_pbiduka(datauser CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datanik CHAR(16), datanama_pbiduka VARCHAR(50), datatelp_pbiduka VARCHAR(20))
                BEGIN
                UPDATE user SET username = datausername, password = datapassword, email = dataemail, foto_user = datafoto_user
                WHERE id_user = datauser;
                UPDATE pb_iduka SET nama_pbiduka = datanama_pbiduka, telp_pbiduka = datatelp_pbiduka
                WHERE nik = datanik;
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
        Schema::dropIfExists('procedure_update_pbiduka');
    }
};