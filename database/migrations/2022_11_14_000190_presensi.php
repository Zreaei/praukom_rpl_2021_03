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
            $table->char('id_presensi', 6)->primary()->nullable(false);
            $table->char('prakerin', 6)->nullable(false);
            $table->char('pb_iduka', 16)->nullable(false);
            $table->char('pb_sekolah', 18)->nullable(false);
            $table->date('tgl_presensi')->nullable(false);
            $table->string('keterangan_presensi', 50)->nullable();
            $table->enum('status_presensi', ['hadir', 'sakit', 'izin', 'alfa'])->nullable(false);
            $table->enum('konfirmasi_pbsekolah', ['terima', 'tolak'])->nullable();
            $table->enum('konfirmasi_pbiduka', ['terima', 'tolak'])->nullable();

            $table->foreign('prakerin')->references('id_prakerin')->on('prakerin')->cascadeOnDelete();
            $table->foreign('pb_iduka')->references('nik_pbiduka')->on('pb_iduka')->cascadeOnDelete();
            $table->foreign('pb_sekolah')->references('nip_pbsekolah')->on('pb_sekolah')->cascadeOnDelete();
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
