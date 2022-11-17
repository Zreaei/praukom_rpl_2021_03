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
        Schema::create('adm_keuangan', function (Blueprint $table) {
            $table->char('id_admkeu', 6)->primary()->nullable(false);
            $table->char('user', 6)->nullable(false);
            $table->string('nama_admkeu', 50)->nullable(false);

            $table->foreign('user')->references('id_user')->on('user')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_keuangan');
    }
};
