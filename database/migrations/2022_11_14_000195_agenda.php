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
        Schema::create('agenda', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->tinyInteger('id_kegiatan')->nullable(false);
            $table->string('foto_kegiatan', 255)->nullable(false);
            $table->text('keterangan_kegiatan')->nullable(false);
            $table->date('tgl_kegiatan')->nullable(false);
            $table->time('jam_masuk')->nullable(false);
            $table->time('jam_keluar')->nullable(false);

            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('kegiatan')->cascadeOnDelete();
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
