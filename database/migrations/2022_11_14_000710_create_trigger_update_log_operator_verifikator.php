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
        DB::unprepared("DROP TRIGGER IF EXISTS trigger_update_log_operator_verifikator");
        DB::unprepared(
          "CREATE TRIGGER trigger_update_log_operator_verifikator
          AFTER UPDATE ON verifikator
          FOR EACH ROW
          BEGIN
          INSERT INTO log_operator_verifikator (nama_event, waktu_event, nip_verifikator, nama_verifikator) VALUES (
            'UBAH',
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
        Schema::dropIfExists('trigger_update_log_operator_verifikator');
    }
};
