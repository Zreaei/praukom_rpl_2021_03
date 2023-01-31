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
        DB::unprepared("DROP PROCEDURE IF EXISTS procedure_update_admkeu");
        DB::unprepared(
          "CREATE PROCEDURE procedure_update_admkeu(datauser CHAR(6), datausername VARCHAR(50), datapassword VARCHAR(50), dataemail VARCHAR(50), datafoto_user VARCHAR(60), dataadmkeu CHAR(6), datanama_admkeu VARCHAR(50))
                BEGIN
                UPDATE user SET username = datausername, password = datapassword, email = dataemail, foto_user = datafoto_user
                WHERE id_user = datauser;
                UPDATE adm_keuangan SET nama_admkeu = datanama_admkeu
                WHERE id_admkeu = dataadmkeu;
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
        Schema::dropIfExists('procedure_update_admkeu');
    }
};