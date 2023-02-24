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
        Schema::create('monitoring', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_monitoring', 6)->primary()->nullable(false);
            $table->char('pb_sekolah', 6)->nullable(false);
            $table->char('prakerin', 6)->nullable(false);
            $table->date('tgl_monitoring')->nullable(false);
            $table->string('laporan_monitoring', 255)->nullable(false);

            $table->foreign('pb_sekolah')->references('id_pbsekolah')->on('pb_sekolah')->cascadeOnDelete();
            $table->foreign('prakerin')->references('id_prakerin')->on('prakerin')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitoring');
    }
};
