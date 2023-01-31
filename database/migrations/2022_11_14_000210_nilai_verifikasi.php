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
        Schema::create('nilai_verifikasi', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_nilaiverif', 6)->primary()->nullable(false);
            $table->char('verifikasi', 6)->nullable(false);
            $table->char('verifikator', 6)->nullable(false);
            $table->tinyInteger('jml_nilaiverif')->nullable(false);
            $table->string('predikat_nilaiverif', 2)->nullable();

            $table->foreign('verifikasi')->references('id_verifikasi')->on('verifikasi')->cascadeOnDelete();
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
        Schema::dropIfExists('nilai_verifikasi');
    }
};
