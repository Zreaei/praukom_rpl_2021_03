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
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_pengajuan', 6)->primary()->nullable(false);
            $table->char('admkeu', 6)->nullable(false);
            $table->char('wkhubin', 18)->nullable(false);
            $table->char('siswa', 9)->nullable(false);
            $table->char('kaprog', 18)->nullable(false);
            $table->char('walas', 18)->nullable(false);
            $table->char('iduka', 6)->nullable(false);
            $table->date('tgl_pengajuan')->nullable(false);
            $table->enum('konfirmasi_admkeu', ['terima', 'tolak'])->nullable();
            $table->enum('konfirmasi_wkhubin', ['terima', 'tolak'])->nullable();
            $table->enum('konfirmasi_kaprog', ['terima', 'tolak'])->nullable();
            $table->enum('konfirmasi_walas', ['terima', 'tolak'])->nullable();

            $table->foreign('siswa')->references('nis')->on('siswa')->cascadeOnDelete();
            $table->foreign('iduka')->references('id_iduka')->on('iduka')->cascadeOnDelete();
            $table->foreign('admkeu')->references('id_admkeu')->on('adm_keuangan')->cascadeOnDelete();
            $table->foreign('wkhubin')->references('nip_wkhubin')->on('waka_hubin')->cascadeOnDelete();
            $table->foreign('kaprog')->references('nip_kaprog')->on('kaprog')->cascadeOnDelete();
            $table->foreign('walas')->references('nip_walas')->on('walas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
};
