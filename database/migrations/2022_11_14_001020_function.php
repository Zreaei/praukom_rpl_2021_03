<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared("DROP FUNCTION IF EXISTS newiduser");
        DB::unprepared(
            "CREATE FUNCTION newiduser()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_user) INTO id_lama FROM user;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('USR',hasil);
            ELSE
                SET id_baru = 'USR001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidoperator");
        DB::unprepared(
            "CREATE FUNCTION newidoperator()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_operator) INTO id_lama FROM operator;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('OPR',hasil);
            ELSE
                SET id_baru = 'OPR001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidjurusan");
        DB::unprepared(
            "CREATE FUNCTION newidjurusan()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_jurusan) INTO id_lama FROM jurusan;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('JRS',hasil);
            ELSE
                SET id_baru = 'JRS001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidkelas");
        DB::unprepared(
            "CREATE FUNCTION newidkelas()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_kelas) INTO id_lama FROM kelas;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('KLS',hasil);
            ELSE
                SET id_baru = 'KLS001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidangkatan");
        DB::unprepared(
            "CREATE FUNCTION newidangkatan()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_angkatan) INTO id_lama FROM angkatan;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('AKT',hasil);
            ELSE
                SET id_baru = 'AKT001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidwalas");
        DB::unprepared(
            "CREATE FUNCTION newidwalas()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_walas) INTO id_lama FROM walas;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('WLS',hasil);
            ELSE
                SET id_baru = 'WLS001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidkaprog");
        DB::unprepared(
            "CREATE FUNCTION newidkaprog()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_kaprog) INTO id_lama FROM kaprog;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('KPR',hasil);
            ELSE
                SET id_baru = 'KPR001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidwkhubin");
        DB::unprepared(
            "CREATE FUNCTION newidwkhubin()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_wkhubin) INTO id_lama FROM waka_hubin;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('WKH',hasil);
            ELSE
                SET id_baru = 'WKH001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidpbsekolah");
        DB::unprepared(
            "CREATE FUNCTION newidpbsekolah()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_pbsekolah) INTO id_lama FROM pb_sekolah;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('PBS',hasil);
            ELSE
                SET id_baru = 'PBS001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidpbiduka");
        DB::unprepared(
            "CREATE FUNCTION newidpbiduka()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_pbiduka) INTO id_lama FROM pb_iduka;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('PBI',hasil);
            ELSE
                SET id_baru = 'PBI001';
            END IF;
            RETURN id_baru;
            END"
        );

        DB::unprepared("DROP FUNCTION IF EXISTS newidverifikator");
        DB::unprepared(
            "CREATE FUNCTION newidverifikator()
            RETURNS char(6)
            BEGIN
            DECLARE id_lama CHAR(6);
            DECLARE id_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE hasil CHAR(6);
            SELECT MAX(id_verifikator) INTO id_lama FROM verifikator;
            IF (id_lama IS NOT NULL) THEN
                SET ambil_angka = SUBSTRING(id_lama,4,3) + 1;
                SET hasil = LPAD(ambil_angka,3,0);
                SET id_baru = CONCAT('VRK',hasil);
            ELSE
                SET id_baru = 'VRK001';
            END IF;
            RETURN id_baru;
            END"
        );

        

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
