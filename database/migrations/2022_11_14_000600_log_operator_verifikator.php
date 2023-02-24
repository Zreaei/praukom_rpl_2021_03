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
        Schema::create('log_operator_verifikator', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->integer('id_log_operator_verifikator', true);
            $table->string('nama_event', 50)->nullable(false);
            $table->date('waktu_event')->nullable(false);
            $table->char('nip_verifikator', 18)->nullable(false);
            $table->string('nama_verifikator', 50)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_operator_verifikator');
    }
};
