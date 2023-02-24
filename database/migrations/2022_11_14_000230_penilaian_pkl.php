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
<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2022_11_14_000230_penilaian_pkl.php
=======
>>>>>>> e01679e195840334664fe728166a85886559141a
        Schema::create('penilaian_pkl', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->tinyInteger('id_nilaipkl')->primary()->nullable(false);
            $table->char('siswa', 9)->nullable(false);
<<<<<<< HEAD
            $table->char('pb_iduka', 16)->nullable(false);

            $table->foreign('siswa')->references('nis')->on('siswa')->cascadeOnDelete();
            $table->foreign('pb_iduka')->references('nik')->on('pb_iduka')->cascadeOnDelete();
========
        Schema::create('sertifikat_pkl', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->tinyInteger('id_sertifpkl')->nullable(false);
            $table->tinyInteger('id_nilaipkl')->nullable(false);

            $table->foreign('id_nilaipkl')->references('id_nilaipkl')->on('penilaian_pkl')->cascadeOnDelete();
>>>>>>>> e01679e195840334664fe728166a85886559141a:database/migrations/2022_11_14_000240_sertifikat_pkl.php
=======
            $table->char('pb_iduka', 18)->nullable(false);

            $table->foreign('siswa')->references('nis')->on('siswa')->cascadeOnDelete();
            $table->foreign('pb_iduka')->references('nik')->on('pb_iduka')->cascadeOnDelete();
>>>>>>> e01679e195840334664fe728166a85886559141a
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2022_11_14_000230_penilaian_pkl.php
        Schema::dropIfExists('penilaian_pkl');
========
        Schema::dropIfExists('sertifikat_pkl');
>>>>>>>> e01679e195840334664fe728166a85886559141a:database/migrations/2022_11_14_000240_sertifikat_pkl.php
=======
        Schema::dropIfExists('penilaian_pkl');
>>>>>>> e01679e195840334664fe728166a85886559141a
    }
};
