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
        DB::unprepared("DROP TRIGGER IF EXISTS trigger_insert_log_operator_pbsekolah");
        DB::unprepared(
          "CREATE TRIGGER trigger_insert_log_operator_pbsekolah
          AFTER INSERT ON pb_sekolah
          FOR EACH ROW
          BEGIN
          INSERT INTO log_operator_pbsekolah (nama_event, waktu_event, nip_pbsekolah, nama_pbsekolah) VALUES (
            'TAMBAH',
            NOW(),
            NEW.nip_pbsekolah,
            NEW.nama_pbsekolah);
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
        Schema::dropIfExists('trigger_insert_log_operator_pbsekolah');
    }
};
