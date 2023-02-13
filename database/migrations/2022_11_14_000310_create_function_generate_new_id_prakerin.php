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
    DB::unprepared("DROP FUNCTION IF EXISTS generate_new_id_prakerin");
    DB::unprepared(
        "CREATE FUNCTION generate_new_id_prakerin()
    RETURNS char(6)
    BEGIN
    DECLARE kode_lama char(6);
    DECLARE kode_baru char(6);
    DECLARE getangka INT;
    DECLARE getkode char(6);
    SELECT MAX(id_prakerin) AS id_prakerin INTO kode_lama FROM prakerin;
    IF (kode_lama IS NOT NULL) THEN
        SET getangka = SUBSTRING(kode_lama, 4, 3)+1;
        SET kode_baru = LPAD(getangka, 3, 0);
        SET getkode = CONCAT('PKR', kode_baru);
    ELSE
        SET getkode = 'PKR001';
    END IF;
    RETURN getkode;
    END ;"
    );
  }
};