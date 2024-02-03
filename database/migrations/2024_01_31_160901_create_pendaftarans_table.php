<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lengkap",255);
            $table->string("nama_panggilan",50);
            $table->bigInteger("nik");
            $table->bigInteger("no_kartu_keluarga");
            $table->bigInteger("no_kartu_akta_lahir");
            $table->string("tempat",50);
            $table->date("tanggal_lahir");
            $table->string("kewarganegaraan",100);
            $table->string("berkebutuhan_khusus",100);
            $table->string("jenis_kelamin",10);
            $table->integer("usia");
            $table->string("alamat_tempat_tinggal",255);
            $table->integer("rt");
            $table->integer("rw");
            $table->string("desa",50);
            $table->string("kecamatan",50);
            $table->bigInteger("lintang");
            $table->bigInteger("bujur");
            $table->bigInteger("kode_pos");
            $table->string("tempat_tinggal",50);
            $table->string("alat_transportasi",100);
            $table->bigInteger("no_hp");
            $table->string("email_anak");
            $table->string("agama",50);
            $table->string("hobi",50);
            $table->string("cita_cita",50);
            $table->integer("anak_ke");
            $table->integer("jumlah_saudara_kandung");
            $table->string("bahasa_sehari_hari");
            $table->integer("tinggi_badan");
            $table->integer("berat_badan");
            $table->string("asal_tk_ra_sd_mi",255);
            $table->string("npsn_tk_ra_sd_mi",255);
            $table->bigInteger("nisn");
            $table->string("penerima_kps_kph",30);
            $table->string("kip",30);
            $table->string("pip",30);
            $table->string("diterima_di_kelas",30);
            $table->date("tanggal_mendaftar");
            $table->string("nama_ayah_kandung",255);
            $table->bigInteger("nik_ayah");
            $table->string("tempat_ayah",100);
            $table->date("tanggal_lahir_ayah");
            $table->string("pendidikan_terakhir_ayah",255);
            $table->string("pekerjaan_ayah",100);
            $table->bigInteger("penghasilan_per_bulan_ayah",);
            $table->string("berkebutuhan_khusus_ayah",100);
            $table->string("alamat_ayah",255)->nullable();
            $table->bigInteger("no_hp_ayah");
            $table->string("nama_ibu_kandung",255);
            $table->string("nik_ibu",255);
            $table->string("tempat_ibu",100);
            $table->date("tanggal_lahir_ibu");
            $table->string("pendidikan_terakhir_ibu",255);
            $table->string("pekerjaan_ibu",100);
            $table->bigInteger("penghasilan_per_bulan_ibu");
            $table->string("berkebutuhan_khusus_ibu");
            $table->string("alamat_ibu",255)->nullable();
            $table->bigInteger("no_hp_ibu");
            $table->string("nama_wali",255);
            $table->bigInteger("nik_wali");
            $table->string("tempat_wali",100);
            $table->date("tanggal_lahir_wali");
            $table->string("pendidikan_terakhir_wali",255);
            $table->string("pekerjaan_wali",100);
            $table->bigInteger("penghasilan_per_bulan_wali");
            $table->string("alamat_wali",255)->nullable();
            $table->bigInteger("no_hp_wali");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};