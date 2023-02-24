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
        Schema::create('kategori_nilai', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->char('id_kat_nilai', 6)->primary()->nullable(false);
            $table->char('jurusan', 6)->nullable(false);
            $table->string('nama_nilai', 50)->nullable(false);
<<<<<<<< HEAD:database/migrations/2022_11_14_000240_kategori_nilai.php
            $table->string('nama_kategori', 30)->nullable(false);
========
            $table->enum('nama_kategori', ['Sikap Mental', 'Kompetensi Teknis'])->nullable(false);
>>>>>>>> e01679e195840334664fe728166a85886559141a:database/migrations/2022_11_14_000205_kategori_nilai.php

            $table->foreign('jurusan')->references('id_jurusan')->on('jurusan')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_nilai');
    }
};
