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
        DB::unprepared("DROP TRIGGER IF EXISTS trigger_delete_log_operator_siswa");
        DB::unprepared(
          "CREATE TRIGGER trigger_delete_log_operator_siswa
          AFTER DELETE ON siswa
          FOR EACH ROW
          BEGIN
          INSERT INTO log_operator_siswa (nama_event, waktu_event, nis, nama_siswa) VALUES (
            'HAPUS',
            NOW(),
            OLD.nis,
            OLD.nama_siswa);
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
        Schema::dropIfExists('trigger_delete_log_operator_siswa');
    }
};
