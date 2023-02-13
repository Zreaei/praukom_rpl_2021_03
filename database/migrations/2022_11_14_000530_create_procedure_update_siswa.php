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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_siswa");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_siswa(datauser CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datanis CHAR(9), datakelas CHAR(6), datanama_siswa VARCHAR(50), datatempat_lahir VARCHAR(255), datatgl_lahir DATE, datatelp_siswa VARCHAR(20))
                BEGIN
                UPDATE user SET username = datausername, password = datapassword, email = dataemail, foto_user = datafoto_user
                WHERE id_user = datauser;
                UPDATE siswa SET kelas = datakelas, nama_siswa = datanama_siswa, tempat_lahir = datatempat_lahir, tgl_lahir = datatgl_lahir, telp_siswa = datatelp_siswa
                WHERE nis = datanis;
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
        Schema::dropIfExists('procedure_update_siswa');
    }
};