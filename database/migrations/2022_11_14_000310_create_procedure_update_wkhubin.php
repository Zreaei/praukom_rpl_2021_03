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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_wkhubin");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_wkhubin(datauser CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datawkhubin CHAR(6), datanip_wkhubin VARCHAR(20), datanama_wkhubin VARCHAR(50))
                BEGIN
                UPDATE user SET username = datausername, password = datapassword, email = dataemail, foto_user = datafoto_user
                WHERE id_user = datauser;
                UPDATE waka_hubin SET nip_wkhubin = datanip_wkhubin, nama_wkhubin = datanama_wkhubin
                WHERE id_wkhubin = datawkhubin;
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
        Schema::dropIfExists('procedure_update_wkhubin');
    }
};