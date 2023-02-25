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
        DB::unprepared(
          "CREATE OR REPLACE VIEW view_join_roleuser AS (
            SELECT
            user.username, user.email, level_user.nama_level
            FROM user
            LEFT JOIN level_user
            ON level_user.id_level = user.level
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
        Schema::dropIfExists('view_join_roleuser');
    }
};
