<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        DB::unprepared("DROP TRIGGER IF EXISTS trigger_delete_log_operator_pbiduka");
        DB::unprepared(
          "CREATE TRIGGER trigger_delete_log_operator_pbiduka
          AFTER DELETE ON pb_iduka
          FOR EACH ROW
          BEGIN
          INSERT INTO log_operator_pbiduka (nama_event, waktu_event, nik, nama_pbiduka) VALUES (
            'HAPUS',
            NOW(),
            OLD.nik,
            OLD.nama_pbiduka);
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
        Schema::dropIfExists('trigger_delete_log_operator_pbiduka');
    }
};
