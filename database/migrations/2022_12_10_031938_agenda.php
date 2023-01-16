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
        //
        Schema::create('agenda', function (Blueprint $table) {
            $table->char('id_agenda', 6)->primary()->nullable(false);
            $table->enum('status_agenda', ['hadir', 'sakit', 'izin', 'alfa'])->nullable(false);
            $table->string('keterangan_agenda', 50)->nullable();
            $table->date('tgl_agenda')->nullable(false);
            $table->string('foto', 225)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
