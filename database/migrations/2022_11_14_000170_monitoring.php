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
            $table->char('id_monitoring', 6)->primary()->nullable(false);
            $table->char('pb_sekolah', 18)->nullable(false);
            $table->char('operator', 6)->nullable(false);
            $table->date('tgl_monitoring')->nullable(false);
            $table->string('laporan_monitoring', 60)->nullable(false);
            $table->enum('konfirmasi_operator', ['terima', 'tolak'])->nullable();

            $table->foreign('pb_sekolah')->references('nip_pbsekolah')->on('pb_sekolah')->cascadeOnDelete();
            $table->foreign('operator')->references('id_operator')->on('operator')->cascadeOnDelete();
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
