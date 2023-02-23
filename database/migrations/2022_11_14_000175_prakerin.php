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
        Schema::create('prakerin', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_prakerin', 6)->primary()->nullable(false);
            $table->char('pengajuan', 6)->nullable(false);
            $table->char('siswa', 9)->nullable(false);
            $table->char('iduka', 6)->nullable(false);
            $table->enum('status_prakerin', ['belum lulus', 'sudah lulus', 'tidak lulus'])->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();

            $table->foreign('pengajuan')->references('id_pengajuan')->on('pengajuan')->cascadeOnDelete();
            $table->foreign('iduka')->references('id_iduka')->on('iduka')->cascadeOnDelete();
            $table->foreign('siswa')->references('nis')->on('siswa')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prakerin');
    }
};
