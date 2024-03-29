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
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_verifikasi', 6)->primary()->nullable(false);
            $table->char('siswa', 9)->nullable(false);
            $table->char('verifikator', 6)->nullable(false);
            $table->date('tgl_verifikasi')->nullable(false);
            $table->string('bukti_verifikasi', 255)->nullable(false);
            $table->enum('konfirmasi_verifikator', ['terima', 'tolak', 'pending'])->default('pending')->nullable();

            $table->foreign('siswa')->references('nis')->on('siswa')->cascadeOnDelete();
            $table->foreign('verifikator')->references('id_verifikator')->on('verifikator')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifikasi');
    }
};
