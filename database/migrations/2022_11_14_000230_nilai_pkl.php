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
        Schema::create('nilai_pkl', function (Blueprint $table) {
            $table->char('id_nilaipkl', 6)->primary()->nullable(false);
            $table->char('prakerin', 6)->nullable(false);
            $table->char('pb_iduka', 16)->nullable(false);
            $table->tinyInteger('jml_nilaipkl')->nullable(false);
            $table->string('predikat_nilaipkl', 2)->nullable();

            $table->foreign('prakerin')->references('id_prakerin')->on('prakerin')->cascadeOnDelete();
            $table->foreign('pb_iduka')->references('nik_pbiduka')->on('pb_iduka')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_pkl');
    }
};
