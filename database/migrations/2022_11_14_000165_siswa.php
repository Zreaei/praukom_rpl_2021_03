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
        Schema::create('siswa', function (Blueprint $table) {
            $table->char('nis', 9)->primary()->nullable(false);
            $table->char('user', 6)->nullable(false);
            $table->char('kelas', 6)->nullable(false);
            $table->string('nama_siswa', 50)->nullable(false);
            $table->string('tempat_lahir', 100)->nullable(false);
            $table->date('tgl_lahir')->nullable(false);
            $table->string('telp_siswa', 20)->nullable(false);

            $table->foreign('user')->references('id_user')->on('user')->cascadeOnDelete();
            $table->foreign('kelas')->references('id_kelas')->on('kelas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
