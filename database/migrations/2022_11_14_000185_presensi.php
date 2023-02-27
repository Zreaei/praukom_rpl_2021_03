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
        Schema::create('presensi', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->tinyInteger('id_presensi')->primary()->nullable(false);
            $table->char('prakerin', 6)->nullable(false);
            $table->char('pb_iduka', 16)->nullable(false);
            $table->char('pb_sekolah', 6)->nullable(false);

            $table->foreign('prakerin')->references('id_prakerin')->on('prakerin')->cascadeOnDelete();
            $table->foreign('pb_iduka')->references('nik')->on('pb_iduka')->cascadeOnDelete();
            $table->foreign('pb_sekolah')->references('id_pbsekolah')->on('pb_sekolah')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
};
