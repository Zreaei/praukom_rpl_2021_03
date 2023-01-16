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
        //
        Schema::create('surat_pengajuan', function (Blueprint $table) {
            $table->char('id_surat', 6)->primary()->autoIncrement()->nullable(false);
            $table->date('tanggal_pengajuan')->now()->nullable(false);
            $table->string('nama_perusahaan', 50)->nullable(false);
            $table->string('pimpinan_perusahaan', 50)->nullable(false);
            $table->string('alamat_perusahaan', 50)->nullable(false);
            $table->string('telp_perusahaan', 20)->nullable(false);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
