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
        Schema::create('penilaian_verif', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->tinyInteger('id_nilaiverif')->primary()->nullable(false);
            $table->char('siswa', 9)->nullable(false);
            $table->char('verifikator', 6)->nullable(false);

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
        Schema::dropIfExists('penilaian_verif');
    }
};
