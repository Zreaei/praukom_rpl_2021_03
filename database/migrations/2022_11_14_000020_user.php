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
        Schema::create('user', function (Blueprint $table) {
            $table->char('id_user', 6)->primary()->nullable(false);
            $table->char('level', 6)->nullable(false);
            $table->string('username', 50)->unique()->nullable(false);
            $table->string('password', 50)->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('foto_user', 60)->nullable(false);

            $table->foreign('level')->references('id_level')->on('level_user')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
