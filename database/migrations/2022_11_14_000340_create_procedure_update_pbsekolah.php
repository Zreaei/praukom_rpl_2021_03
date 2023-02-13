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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_pbsekolah");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_pbsekolah(datauser CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datapbsekolah CHAR(6), datanip_pbsekolah VARCHAR(20), datanama_pbsekolah VARCHAR(50), datatelp_pbsekolah VARCHAR(20))
                BEGIN
                UPDATE user SET username = datausername, password = datapassword, email = dataemail, foto_user = datafoto_user
                WHERE id_user = datauser;
                UPDATE pb_sekolah SET nip_pbsekolah = datanip_pbsekolah, nama_pbsekolah = datanama_pbsekolah, telp_pbsekolah = datatelp_pbsekolah
                WHERE id_pbsekolah = datapbsekolah;
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
        Schema::dropIfExists('procedure_update_pbsekolah');
    }
};