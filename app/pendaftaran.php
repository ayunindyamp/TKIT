<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey='id';
    protected $fillable = [
        'id','nama_calon','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','kewarganegaraan','alamat',
        'tinggal','anak_ke','usia','no_tlp','nama_ayah','nik_ayah','tahun_lahir_ayah','pendidikan_ayah',
        'pekerjaan_ayah','nama_ibu','nik_ibu','tahun_lahir_ibu','pendidikan_ibu','pekerjaan_ibu','tinggi_badan',
        'berat_badan','jarak_tempuh','jumlah_saudara','jenis_pendaftaran','tanggal_masuk','no_induk','masuk_rombel'
    ];
}
