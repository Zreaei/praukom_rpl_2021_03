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
        Schema::create('absensi', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->tinyInteger('id_absensi')->primary()->nullable(false);
            $table->tinyInteger('id_presensi')->nullable(false);
            $table->date('tgl_presensi')->nullable(false);
            $table->string('keterangan_presensi', 50)->nullable();
            $table->enum('status_presensi', ['hadir', 'sakit', 'izin', 'alfa'])->nullable(false);
            $table->enum('konfirmasi_pbsekolah', ['pending','terima', 'tolak'])->nullable();
            $table->enum('konfirmasi_pbiduka', ['pending','terima', 'tolak'])->nullable();

            $table->foreign('id_presensi')->references('id_presensi')->on('presensi')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
};
