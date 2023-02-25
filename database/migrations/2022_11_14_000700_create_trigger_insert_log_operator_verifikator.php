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
        DB::unprepared("DROP TRIGGER IF EXISTS trigger_insert_log_operator_verifikator");
        DB::unprepared(
          "CREATE TRIGGER trigger_insert_log_operator_verifikator
          AFTER INSERT ON verifikator
          FOR EACH ROW
          BEGIN
          INSERT INTO log_operator_verifikator (nama_event, waktu_event, nip_verifikator, nama_verifikator) VALUES (
            'TAMBAH',
            NOW(),
            NEW.nip_verifikator,
            NEW.nama_verifikator);
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
        Schema::dropIfExists('trigger_insert_log_operator_verifikator');
    }
};
