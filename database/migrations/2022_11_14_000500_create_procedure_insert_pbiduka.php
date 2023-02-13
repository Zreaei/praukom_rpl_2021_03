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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_insert_pbiduka");
        DB::unprepared(
<<<<<<< HEAD:database/migrations/2022_11_14_000270_create_procedure_insert_admkeu.php
          "CREATE PROCEDURE procedure_insert_admkeu(
            datalevel CHAR(6), 
            datausername VARCHAR(50), 
            datapassword VARCHAR(50), 
            dataemail VARCHAR(50), 
            datafoto_user VARCHAR(60), 
            datanama_admkeu VARCHAR(50))
=======
          "CREATE PROCEDURE procedure_insert_pbiduka(datalevel CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(255), dataemail VARCHAR(50), datafoto_user VARCHAR(255), datanik CHAR(16), datanama_pbiduka VARCHAR(50), datatelp_pbiduka VARCHAR(20))
>>>>>>> 7be6b6171398e8469cc955736142442135385b55:database/migrations/2022_11_14_000500_create_procedure_insert_pbiduka.php
                BEGIN
                DECLARE kodeuser CHAR(6);
                SELECT generate_new_kode_user() INTO kodeuser;
                INSERT INTO user (id_user, level, username, password, email, foto_user) VALUES(kodeuser, datalevel, datausername, datapassword, dataemail, datafoto_user);
                INSERT INTO pb_iduka (nik, user, nama_pbiduka, telp_pbiduka) VALUES(datanik, kodeuser, datanama_pbiduka, datatelp_pbiduka);
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
        Schema::dropIfExists('procedure_insert_pbiduka');
    }
};