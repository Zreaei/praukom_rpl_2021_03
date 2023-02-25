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
        DB::unprepared(
          "CREATE OR REPLACE VIEW view_agregat_jumlahpbsekolah AS (
            SELECT COUNT(id_pbsekolah) AS jml_pbsekolah FROM pb_sekolah
            )"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_agregat_jumlahpbsekolah');
    }
};
