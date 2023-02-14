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
        Schema::create('iduka', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_iduka', 6)->primary()->nullable(false);
            $table->string('nama_iduka', 50)->nullable(false);
            $table->string('pimpinan_iduka', 50)->nullable(false);
            $table->string('alamat_iduka', 255)->nullable(false);
            $table->string('telp_iduka', 20)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iduka');
    }
};
