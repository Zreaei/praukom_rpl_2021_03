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
        Schema::create('kaprog', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_kaprog', 6)->primary()->nullable(false);
            $table->char('user', 6)->nullable(false);
            $table->string('nip_kaprog', 20)->nullable(false);
            $table->string('nama_kaprog', 50)->nullable(false);

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
        Schema::dropIfExists('kaprog');
    }
};
