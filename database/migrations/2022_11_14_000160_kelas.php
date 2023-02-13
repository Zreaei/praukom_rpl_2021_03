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
        Schema::create('kelas', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_kelas', 6)->primary()->nullable(false);
            $table->char('jurusan', 6)->nullable(false);
            $table->char('walas', 6)->nullable(false);
            $table->char('angkatan', 6)->nullable(false);
            $table->char('tingkatan', 2)->nullable(false);
            $table->string('nama_kelas', 1)->nullable();

            $table->foreign('walas')->references('id_walas')->on('walas')->cascadeOnDelete();
            $table->foreign('angkatan')->references('id_angkatan')->on('angkatan')->cascadeOnDelete();
            $table->foreign('jurusan')->references('id_jurusan')->on('jurusan')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
