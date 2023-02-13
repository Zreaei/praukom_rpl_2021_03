<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    DB::unprepared("DROP FUNCTION IF EXISTS generate_new_id_presensi");
    DB::unprepared(
        "CREATE FUNCTION generate_new_id_presensi()
    RETURNS char(6)
    BEGIN
    DECLARE kode_lama char(6);
    DECLARE kode_baru char(6);
    DECLARE getangka INT;
    DECLARE getkode char(6);
    SELECT MAX(id_presensi) AS id_presensi INTO kode_lama FROM presensi;
    IF (kode_lama IS NOT NULL) THEN
        SET getangka = SUBSTRING(kode_lama, 4, 3)+1;
        SET kode_baru = LPAD(getangka, 3, 0);
        SET getkode = CONCAT('PRN', kode_baru);
    ELSE
        SET getkode = 'PRN001';
    END IF;
    RETURN getkode;
    END ;"
    );
  }
};