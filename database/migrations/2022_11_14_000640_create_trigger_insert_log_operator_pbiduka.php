<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared("DROP TRIGGER IF EXISTS trigger_insert_log_operator_pbiduka");
        DB::unprepared(
          "CREATE TRIGGER trigger_insert_log_operator_pbiduka
          AFTER INSERT ON pb_iduka
          FOR EACH ROW
          BEGIN
          INSERT INTO log_operator_pbiduka (nama_event, waktu_event, nik, nama_pbiduka) VALUES (
            'TAMBAH',
            NOW(),
            NEW.nik,
            NEW.nama_pbiduka);
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
        Schema::dropIfExists('trigger_insert_log_operator_pbiduka');
    }
};
