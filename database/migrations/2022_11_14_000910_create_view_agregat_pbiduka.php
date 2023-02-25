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
          "CREATE OR REPLACE VIEW view_agregat_jumlahpbiduka AS (
            SELECT COUNT(nik) AS jml_pbiduka FROM pb_iduka
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
        Schema::dropIfExists('view_agregat_jumlahpbiduka');
    }
};
