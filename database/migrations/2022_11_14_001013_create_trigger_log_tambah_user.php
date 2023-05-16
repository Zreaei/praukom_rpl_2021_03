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
        DB::unprepared("DROP TRIGGER IF EXISTS log_tambah_user");
        DB::unprepared(
            "CREATE TRIGGER after_insert_user
            AFTER INSERT
            ON user
            FOR EACH ROW
            BEGIN
            
            DECLARE kodelog CHAR(6);
            SELECT newidloguser() INTO kodelog;
            
            INSERT INTO log_admin_user (id_log_user, nama_event, waktu_event, id_user, username)
            VALUES (kodelog, 'TAMBAH', NOW(), NEW.id_user, NEW.username);
            
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
        Schema::dropIfExists('trigger_log_tambah_user');
    }
};
