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
            $table->char('id_presensi', 6)->primary()->nullable(false);
            $table->char('prakerin', 6)->nullable(false);
            $table->char('pb_iduka', 16)->nullable(false);
            $table->char('pb_sekolah', 6)->nullable(false);
            $table->date('tgl_presensi')->nullable();
            $table->string('keterangan_presensi', 50)->nullable();
            $table->enum('status_presensi', ['hadir', 'sakit', 'izin', 'alfa'])->nullable(false);
            $table->enum('konfirmasi_pbsekolah', ['terima', 'tolak', 'pending'])->default('pending')->nullable();
            $table->enum('konfirmasi_pbiduka', ['terima', 'tolak', 'pending'])->default('pending')->nullable();

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
