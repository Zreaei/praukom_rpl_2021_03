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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_insert_pbsekolah");
        DB::unprepared(
          "CREATE PROCEDURE procedure_insert_pbsekolah(datalevel CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datanip_pbsekolah VARCHAR(20), datanama_pbsekolah VARCHAR(50), datatelp_pbsekolah VARCHAR(20))
                BEGIN
                DECLARE kodeuser CHAR(6);
                DECLARE kodepbsekolah CHAR(6);
                DECLARE pesanError CHAR(5) DEFAULT '00000';
                DECLARE CONTINUE HANDLER FOR SQLEXCEPTION, SQLWARNING
                BEGIN
                GET DIAGNOSTICS CONDITION 1
                pesanError = RETURNED_SQLSTATE;
                END;
                START TRANSACTION;
                SAVEPOINT satu;
                SELECT generate_new_kode_user() INTO kodeuser;
                SELECT generate_new_kode_pbsekolah() INTO kodepbsekolah;
                INSERT INTO user (id_user, level, username, password, email, foto_user) VALUES(kodeuser, datalevel, datausername, datapassword, dataemail, datafoto_user);
                IF pesanError != '00000' THEN ROLLBACK TO satu;
                END IF;
                INSERT INTO pb_sekolah (id_pbsekolah, user, nip_pbsekolah, nama_pbsekolah, telp_pbsekolah) VALUES(kodepbsekolah, kodeuser, datanip_pbsekolah, datanama_pbsekolah, datatelp_pbsekolah);
                IF pesanError != '00000' THEN ROLLBACK TO satu;
                END IF;
                COMMIT;
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
        Schema::dropIfExists('procedure_insert_pbsekolah');
    }
};