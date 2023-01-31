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
        Schema::create('jurusan', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_jurusan', 6)->primary()->nullable(false);
            $table->char('kaprog', 18)->nullable(false);
            $table->string('bidang_keahlian', 50)->nullable(false);
            $table->string('program_keahlian', 50)->nullable(false);

            $table->foreign('kaprog')->references('nip_kaprog')->on('kaprog')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan');
    }
};
