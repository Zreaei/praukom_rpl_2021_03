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
        Schema::create('kategori_nilaipkl', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_kat_nilaipkl', 6)->primary()->nullable(false);
            $table->char('jurusan', 6)->nullable(false);
            $table->char('nilai_pkl', 6)->nullable(false);
            $table->string('nama_nilaipkl', 50)->nullable(false);
            $table->string('kategori_nilaipkl', 30)->nullable(false);

            $table->foreign('jurusan')->references('id_jurusan')->on('jurusan')->cascadeOnDelete();
            $table->foreign('nilai_pkl')->references('id_nilaipkl')->on('nilai_pkl')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_nilaipkl');
    }
};
