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
        Schema::create('nilai_verif', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->tinyInteger('id_nilaiverif')->nullable(false);
            $table->char('kategori_nilai', 6)->nullable(false);
            $table->tinyInteger('nilai_verif')->nullable(false);

            $table->foreign('kategori_nilai')->references('id_kat_nilai')->on('kategori_nilai')->cascadeOnDelete();
            $table->foreign('id_nilaiverif')->references('id_nilaiverif')->on('penilaian_verif')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_verif');
    }
};
