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
    DB::unprepared("DROP FUNCTION IF EXISTS generate_new_kode_wkhubin");
    DB::unprepared(
        "CREATE FUNCTION generate_new_kode_wkhubin()
    RETURNS char(6)
    BEGIN
    DECLARE kode_lama char(6);
    DECLARE kode_baru char(6);
    DECLARE getangka INT;
    DECLARE getkode char(6);
    SELECT MAX(id_wkhubin) AS kode_wkhubin INTO kode_lama FROM waka_hubin;
    IF (kode_lama IS NOT NULL) THEN
        SET getangka = SUBSTRING(kode_lama, 4, 3)+1;
        SET kode_baru = LPAD(getangka, 3, 0);
        SET getkode = CONCAT('WKH', kode_baru);
    ELSE
        SET getkode = 'WKH001';
    END IF;
    RETURN getkode;
    END ;"
    );
  }
};