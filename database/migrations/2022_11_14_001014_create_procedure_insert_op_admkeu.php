<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS tambah_op_admkeu");
        DB::unprepared(
            "CREATE PROCEDURE tambah_op_admkeu(
                datalevel CHAR(6),
                datausername VARCHAR(50),
                datapassword VARCHAR(255),
                dataemail VARCHAR(50),
                datafoto VARCHAR(255) 
            )

            BEGIN
            DECLARE kode_user CHAR(6);
            DECLARE kode_op CHAR(6);
            DECLARE kode_admkeu CHAR(6);
            DECLARE level_user CHAR(6);
          
            DECLARE kodeError CHAR(5) DEFAULT '00000';
            DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
            BEGIN
                GET DIAGNOSTICS CONDITION 1
                kodeError = RETURNED_SQLSTATE;
            END;

            START TRANSACTION;
            SAVEPOINT satu;

                SELECT newiduser() INTO kode_user;
                SELECT newidoperator() INTO kode_op;
                SELECT newidadmkeu() INTO kode_admkeu;

                INSERT INTO user (id_user, level, username, password, email, foto_user)
                VALUES (kode_user, datalevel, datausername, datapassword, dataemail, datafoto);

                IF kodeError != '00000' THEN
                    ROLLBACK TO satu;
                END IF;

            SAVEPOINT insert_op_admkeu;
    
                IF(datalevel='LVL002')THEN
                    INSERT INTO operator (id_operator, user)
                    VALUES (kode_op, kode_user);

                ELSEIF(datalevel='LVL007')THEN
                    INSERT INTO adm_keuangan (id_admkeu, user)
                    VALUES (kode_admkeu, kode_user);

                END IF;

                IF kodeError != '00000' THEN
                    ROLLBACK TO insert_op_admkeu;
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
        Schema::dropIfExists('procedure_insert_op_admkeu');
    }
};
