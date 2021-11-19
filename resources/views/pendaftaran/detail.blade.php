@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$pendaftaran->Nama_Lengkap}}</h4>
                    <form action="{{ url('pendaftaran/create') }}" method="POST" class="forms-sample">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama
                                Lengkap</label>
                            <div class="col-sm-9">
                                <input name="Nama_Lengkap" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->Nama_Lengkap}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input name="Nama_Lengkap" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->Jenis_Kelamin}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-9">
                                <input name="NISN" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->NISN}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK/No. KITAS (Untuk
                                WNA)</label>
                            <div class="col-sm-9">
                                <input name="NIK" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->NIK}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Tempat
                                Lahir</label>
                            <div class="col-sm-9">
                                <input name="Tempat_Lahir" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Tempat_Lahir}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-sm-9">
                                <input name="Tanggal_Lahir" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Tanggal_Lahir}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No. Registrasi Akta
                                Lahir</label>
                            <div class="col-sm-9">
                                <input name="No_Regis_Akta" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->No_Regis_Akta}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Agama</label>
                            <div class="col-sm-9">
                                <input name="No_Regis_Akta" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->Agama}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-9">
                                <input name="No_Regis_Akta" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->Kewarganegaraan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Berkebutuhan
                                Khusus</label>
                            <div class="col-sm-9">
                                <input name="No_Regis_Akta" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="{{$pendaftaran->Berkebutuhan_Khusus}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Alamat
                                Lengkap</label>
                            <div class="col-sm-9">
                                <input name="Alamat_Jalan" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Alamat_Jalan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">RT</label>
                            <div class="col-sm-9">
                                <input name="RT" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->RT}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">RW</label>
                            <div class="col-sm-9">
                                <input name="RW" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->RW}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nama Dusun</label>
                            <div class="col-sm-9">
                                <input name="Dusun" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Dusun}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nama Kelurahan/
                                Desa</label>
                            <div class="col-sm-9">
                                <input name="Kelurahan" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Kelurahan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input name="Kecamatan" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Kecamatan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Kode Pos</label>
                            <div class="col-sm-9">
                                <input name="Kode_Pos" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Kode_Pos}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Tempat
                                Tinggal</label>
                            <div class="col-sm-9">
                                <input name="Kode_Pos" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Tempat_tinggal}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Mode
                                Transportasi</label>
                            <div class="col-sm-9">
                                <input name="Kode_Pos" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Mode_Transportasi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nomor KKS (Kartu
                                Keluarga Sejahtera)</label>
                            <div class="col-sm-9">
                                <input name="Nomor_KKS" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Nomor_KKS}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Anak
                                Keberapa</label>
                            <div class="col-sm-9">
                                <input name="Anak_Ke" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Anak_Ke}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penerima KPS/PKH</label>
                            <div class="col-sm-9">
                                <input name="Anak_Ke" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Penerima_KPS}}">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">No. KPS/PKH</label>
                            <div class="col-sm-9">
                                <input name="No_KPS" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->No_KPS}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Usulan Dari Sekolah (Layak PIP)</label>
                            <div class="col-sm-9">
                                <input name="No_KPS" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Layak_PIP}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penerima KIP (Kartu Indonesia Pintar)</label>
                            <div class="col-sm-9">
                                <input name="No_KPS" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Penerima_KIP}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nomor KIP</label>
                            <div class="col-sm-9">
                                <input name="No_KIP" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->No_KIP}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nama tertera di
                                KIP</label>
                            <div class="col-sm-9">
                                <input name="Nama_KIP" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Nama_KIP}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terima fisik Kartu (KIP)</label>
                            <div class="col-sm-9">
                                <input name="Nama_KIP" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Terima_Kartu_Fisik}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Alasan layak
                                PIK</label>
                            <div class="col-sm-9">
                                <input name="Nama_KIP" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="{{$pendaftaran->Alasan}}">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA AYAH KANDUNG</h4>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Ayah Kandung</label>
                        <div class="col-sm-9">
                            <input input name="Nama_Ayah" type="text" class="form-control" id="exampleInputUsername2"
                                placeholder="{{$pendaftaran->Nama_Ayah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK Ayah</label>
                        <div class="col-sm-9">
                            <input input name="NIK_Ayah" type="text" class="form-control" id="exampleInputUsername2"
                                placeholder="{{$pendaftaran->NIK_Ayah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                            Lahir</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ayah" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Tanggal_Lahir_Ayah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pendidikan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ayah" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Pendidikan_Ayah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ayah" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Pekerjaan_Ayah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Penghasilan
                            Bulanan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ayah" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Penghasilan_Ayah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Berkebutuhan
                            Khusus</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ayah" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Berkebutuhan_Khusus_Ayah}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA IBU KANDUNG</h4>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Ibu</label>
                        <div class="col-sm-9">
                            <input input name="Nama_Ibu" type="text" class="form-control" id="exampleInputUsername2"
                                placeholder="{{$pendaftaran->Nama_Ibu}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input input name="NIK_Ibu" type="text" class="form-control" id="exampleInputUsername2"
                                placeholder="{{$pendaftaran->NIK_Ibu}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                            Lahir</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ibu" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Tanggal_Lahir_Ibu}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pendidikan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ibu" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Pendidikan_Ibu}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ibu" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Pekerjaan_Ibu}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Penghasilan
                            Bulanan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ibu" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Penghasilan_Ibu}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Berkebutuhan
                            Khusus</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Ibu" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Berkebutuhan_Khusus_Ibu}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA WALI</h4>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Wali</label>
                        <div class="col-sm-9">
                            <input input name="Nama_Wali" type="text" class="form-control" id="exampleInputUsername2"
                                placeholder="{{$pendaftaran->Nama_Wali}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input input name="NIK_Wali" type="text" class="form-control" id="exampleInputUsername2"
                                placeholder="{{$pendaftaran->NIK_Wali}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                            Lahir</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Wali" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Tanggal_Lahir_Wali}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pendidikan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Wali" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Pendidikan_Wali}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Lahir_Wali" type="text" class="form-control"
                                id="exampleInputUsername2" placeholder="{{$pendaftaran->Pekerjaan_Wali}}">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Penghasilan
                        Bulanan</label>
                    <div class="col-sm-9">
                        <input input name="Tanggal_Lahir_Wali" type="text" class="form-control"
                            id="exampleInputUsername2" placeholder="{{$pendaftaran->Penghasilan_Wali}}">
                    </div>
                </div>
                </div>
                </div>
                </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">KONTAK</h4>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor telepon
                                    Rumah</label>
                                <div class="col-sm-9">
                                    <input input name="No_Tlp_Rumah" type="text" class="form-control"
                                        id="exampleInputUsername2" placeholder="{{$pendaftaran->No_Tlp_Rumah}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor HP</label>
                                <div class="col-sm-9">
                                    <input input name="No_HP" type="text" class="form-control" id="exampleInputUsername2"
                                        placeholder="{{$pendaftaran->No_HP}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input input name="email" type="text" class="form-control" id="exampleInputUsername2"
                                        placeholder="{{$pendaftaran->email}}">
                                </div>
                            </div>
                    </div>
                </div>
            </div>    
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA PERIODIK</h4>
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="exampleInputName1" class="col-sm-3 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-9">
                                <input input name="Tinggi_Badan" type="text" class="form-control" id="exampleInputName1"
                                    placeholder="{{$pendaftaran->Tinggi_Badan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Berat Badan</label>
                            <div class="col-sm-9">
                                <input input name="Berat_Badan" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="{{$pendaftaran->Berat_Badan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" class="col-sm-3 col-form-label">Jarak tempat
                                tinggal ke sekolah</label>
                                <div class="col-sm-9">
                                <input input name="Berat_Badan" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="{{$pendaftaran->Jarak}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Sebutkan dalam
                                kilometer</label>
                            <div class="col-sm-9">
                                <input input name="Jarak_Sebut" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="{{$pendaftaran->Jarak_Sebut}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Waktu tempuh ke
                                sekolah</label>
                            <div class="col-sm-9">
                                <input input name="Waktu_Tempuh" type="text" class="form-control"
                                    id="exampleInputEmail3" placeholder="{{$pendaftaran->Waktu_Tempuh}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Jumlah Saudara
                                Kandung</label>
                            <div class="col-sm-9">
                                <input input name="Jumlah_Saudara" type="text" class="form-control"
                                    id="exampleInputEmail3" placeholder="{{$pendaftaran->Jumlah_Saudara}}">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">REGISTRASI PESERTA DIDIK</h4>
                    <p class="card-description">
                        Isi berdasarkan data Siswa
                    </p>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-9">
                                <input input name="Berat_Badan" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="{{$pendaftaran->Jenis_Pendaftaran}}">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 col-form-label">No. Induk Siswa</label>
                        <div class="col-sm-9">
                            <input input name="No_Induk" type="text" class="form-control" id="exampleInputEmail3"
                                placeholder="{{$pendaftaran->No_Induk}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-9">
                            <input input name="Tanggal_Masuk" type="text" class="form-control" id="exampleInputEmail3"
                                placeholder="{{$pendaftaran->Tanggal_Masuk}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Sekolah Sebelumnya</label>
                        <div class="col-sm-9">
                            <input input name="Sekolah_Sebelumnya" type="text" class="form-control"
                                id="exampleInputEmail3" placeholder="{{$pendaftaran->Sekolah_Sebelumnya}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Masuk Rombel</label>
                        <div class="col-sm-9">
                                <input input name="Berat_Badan" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="{{$pendaftaran->Masuk_Rombel}}">
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA KELUAR</h4>
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Keluar Karena</label>
                            <div class="col-sm-9">
                                <input input name="Berat_Badan" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="{{$pendaftaran->keluar}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Tanggal Keluar</label>
                            <div class="col-sm-9">
                                <input input name="Tanggal_Keluar" type="text" class="form-control"
                                    id="exampleInputEmail3" placeholder="{{$pendaftaran->Tanggal_Keluar}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Alasan</label>
                            <div class="col-sm-9">
                                <input input name="Alasan_Keluar" type="text" class="form-control"
                                    id="exampleInputEmail3" placeholder="{{$pendaftaran->Alasan_Keluar}}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
