<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateaPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_calon');
            $table->enum('jenis_kelamin', ['laki', 'perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->text('alamat');
            $table->string('tinggal');
            $table->string('anak_ke');
            $table->string('usia');
            $table->string('no_tlp');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->date('tahun_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->date('tahun_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('jarak_tempuh');
            $table->string('jumlah_saudara');
            $table->enum('jenis_pendaftaran', ['siswa_baru', 'pindahan', 'sekolah_lagi']);
            $table->date('tanggal_masuk');
            $table->string('no_induk');
            $table->enum('masuk_rombel', ['a', 'b']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
