<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Pendaftaran TKIT</title>

    <link rel="stylesheet" href={{asset("siswa/css/maicons.css")}}>

    <link rel="stylesheet" href={{asset("siswa/css/bootstrap.css")}}>

    <link rel="stylesheet" href={{asset("siswa/vendor/animate/animate.css")}}>

    <link rel="stylesheet" href={{asset("siswa/css/theme.css")}}>

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a class="navbar-brand brand-logo mr-5" href="{{ url('/') }}"><img src={{asset("siswa/img/logo.png")}} class="mr-2"
                        alt="logo" /></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" target="_blank"
                                href="https://tkit-buahhatikita.sch.id">Profil TKIT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Daftar Akun</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('pendaftaran/create') }}">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pembayaran/pembayaran') }}">Pembayaran</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">DATA PRIBADI</h4>
                        <form action="{{ url('pendaftaran/create') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama
                                    Lengkap</label>
                                <div class="col-sm-9">
                                    <input name="Nama_Lengkap" type="text" class="form-control"
                                        id="exampleInputUsername2" #placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Jenis_Kelamin"
                                                id="membershipRadios1" value="Laki-laki" checked>
                                            Laki-laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Jenis_Kelamin"
                                                id="membershipRadios2" value="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NISN</label>
                                <div class="col-sm-9">
                                    <input name="NISN" type="text" class="form-control" id="exampleInputUsername2"
                                        #placeholder="NISN">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK/No. KITAS (Untuk
                                    WNA)</label>
                                <div class="col-sm-9">
                                    <input name="NIK" type="text" class="form-control" id="exampleInputUsername2"
                                        #placeholder="NIK/No. KITAS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Tempat
                                    Lahir</label>
                                <div class="col-sm-9">
                                    <input name="Tempat_Lahir" type="text" class="form-control"
                                        id="exampleInputUsername1" #placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Tanggal
                                    Lahir</label>
                                <div class="col-sm-9">
                                    <input name="Tanggal_Lahir" type="date" class="form-control"
                                        id="exampleInputUsername1" #placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No. Registrasi Akta
                                    Lahir</label>
                                <div class="col-sm-9">
                                    <input name="No_Regis_Akta" type="text" class="form-control"
                                        id="exampleInputUsername2" #placeholder="No. Registrasi Akta Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Agama</label>
                                <div class="col-sm-9">
                                    <select name="Agama" class="form-control" id="exampleSelectGender">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen/Protestan">Kristen/Protestan</option>
                                        <option value="Hindu">Khatolik</option>
                                        <option value="Budha">Hindu</option>
                                        <option value="Khong_Hu_Chu">Khong Hu Chu</option>
                                        <option value="YME">Kepercayaan kpd YME</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Kewarganegaraan"
                                                id="membershipRadios1" value="WNI" checked>
                                            Indonesia (WNI)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Kewarganegaraan"
                                                id="membershipRadios2" value="WNA">
                                            Asing (WNA)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Berkebutuhan
                                    Khusus</label>
                                <div class="col-sm-9">
                                    <select name="Berkebutuhan_Khusus" class="form-control" id="exampleSelectGender">
                                        <option value="Tidak">Tidak</option>
                                        <option value="Netra">Netra</option>
                                        <option value="Rungu">Rungu</option>
                                        <option value="Grahita_ringan">Grahita Ringan</option>
                                        <option value="Grahita_Sedang">Grahita Sedang</option>
                                        <option value="Daksa_Ringan">Daksa Ringan</option>
                                        <option value="Daksa_Sedang">Daksa Sedang</option>
                                        <option value="Laras">Larasa</option>
                                        <option value="Wicara">Wicara</option>
                                        <option value="Tuna_ganda">Tuna Ganda</option>
                                        <option value="Hiper_aktif">Hiper Aktif</option>
                                        <option value="Cerdas_Isimewa">Cerdas Isimewa</option>
                                        <option value="Bakat_Istimewa">Bakat Istimewa</option>
                                        <option value="Kesulitan_Belajra">Kesulitan Belajar</option>
                                        <option value="Narkoba">Narkoba</option>
                                        <option value="Indigo">Indigo</option>
                                        <option value="Down_Sindrome">Down Sindrome</option>
                                        <option value="Autis">Autis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Alamat
                                    Lengkap</label>
                                <div class="col-sm-9">
                                    <input name="Alamat_Jalan" type="text" class="form-control"
                                        id="exampleInputUsername1" #placeholder="Alamat Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">RT</label>
                                <div class="col-sm-9">
                                    <input name="RT" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="RT">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">RW</label>
                                <div class="col-sm-9">
                                    <input name="RW" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="RW">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nama Dusun</label>
                                <div class="col-sm-9">
                                    <input name="Dusun" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="Nama Dusun">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nama Kelurahan/
                                    Desa</label>
                                <div class="col-sm-9">
                                    <input name="Kelurahan" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="Nama Kelurahan/ Desa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Kecamatan</label>
                                <div class="col-sm-9">
                                    <input name="Kecamatan" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="Kecamatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input name="Kode_Pos" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Tempat
                                    Tinggal</label>
                                <div class="col-sm-9">
                                    <select name="Tempat_tinggal" class="form-control" id="exampleSelectGender">
                                        <option value="Orang_Tua">Bersama Orang Tua</option>
                                        <option value="Wali">Wali</option>
                                        <option value="Kos">Kos</option>
                                        <option value="Asrama">Asrama</option>
                                        <option value="Panti Asuhan">Panti Asuhan</option>
                                        <option value="Pesantren">Pesantren</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Mode
                                    Transportasi</label>
                                <div class="col-sm-9">
                                    <select name="Mode_Transportasi" class="form-control" id="exampleSelectGender">
                                        <option value="Jalan_Kaki">Jalan Kaki</option>
                                        <option value="Kendaraan_pribadi">Kendaraan Pribadi</option>
                                        <option value="Kendaraan_Umum">Kendaraan Umum/Angkot/Pete-pete</option>
                                        <option value="Jemputan">Jemputan Sekolah</option>
                                        <option value="Beca">Andong/Bendi/Sado/Dokar/Ddelman/Beca</option>
                                        <option value="Perahu">Perahu Penyebrangan/Rakit/Getek</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nomor KKS (Kartu
                                    Keluarga Sejahtera)</label>
                                <div class="col-sm-9">
                                    <input name="Nomor_KKS" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="Anak Ke">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Anak
                                    Keberapa</label>
                                <div class="col-sm-9">
                                    <input name="Anak_Ke" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="Anak Ke">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Penerima KPS/PKH</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Penerima_KPS"
                                                id="membershipRadios1" value="ya" checked>
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Penerima_KPS"
                                                id="membershipRadios2" value="tidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">No. KPS/PKH</label>
                                <div class="col-sm-9">
                                    <input name="No_KPS" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="No. KPS/ PKH">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Usulan Dari Sekolah (Layak PIP)</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Layak_PIP"
                                                id="membershipRadios1" value="ya" checked>
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Layak_PIP"
                                                id="membershipRadios2" value="tidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Penerima KIP (Kartu Indonesia Pintar)</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Penerima_KIP"
                                                id="membershipRadios1" value="ya" checked>
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Penerima_KIP"
                                                id="membershipRadios2" value="tidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nomor KIP</label>
                                <div class="col-sm-9">
                                    <input name="No_KIP" type="text" class="form-control" id="exampleInputUsername1"
                                        #placeholder="Nomor KIP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Nama tertera di
                                    KIP</label>
                                <div class="col-sm-9">
                                    <input name="Nama_KIP" type="text" class="form-control" id="exampleInputUsername1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Terima fisik Kartu (KIP)</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Terima_Kartu_Fisik"
                                                id="membershipRadios1" value="ya" checked>
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="Terima_Kartu_Fisik"
                                                id="membershipRadios2" value="tidak">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Alasan layak
                                    PIK</label>
                                <div class="col-sm-9">
                                    <select name="Alasan" class="form-control" id="exampleSelectGender">
                                        <option value="Pemegang PKH/KPS/KIP">Pemegang PKH/KPS/KIP</option>
                                        <option value="Penerima_BSM">Penerima BSM</option>
                                        <option value="Yatim_Piatu">Yatim Piatu/Panti Asuhan/Panti Sosial</option>
                                        <option value="Dampak_Bencana">Dampak Bencana</option>
                                        <option value="Prenah_DO">Pernah Drop Out</option>
                                        <option value="Siswa_Miskin">Siswa Miskin/Renta Miskin</option>
                                        <option value="Daerah_Konflik">Daerah Konflik</option>
                                        <option value="Keluarga_Terpidana">Keluarga Terpidana</option>
                                        <option value="Kelainan_Fisik">Kelainan Fisik</option>
                                    </select>
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
                                <input input name="Nama_Ayah" type="text" class="form-control"
                                    id="exampleInputUsername2" ##placeholder="Nama Ayah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK Ayah</label>
                            <div class="col-sm-9">
                                <input input name="NIK_Ayah" type="text" class="form-control" id="exampleInputUsername2"
                                    #placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-sm-9">
                                <input input name="Tanggal_Lahir_Ayah" type="date" class="form-control"
                                    id="exampleInputUsername2" #placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pendidikan</label>
                            <div class="col-sm-9">
                                <select name="Pendidikan_Ayah" class="form-control" id="exampleSelectGender">
                                    <option value="Tidak sekolah">Tidak Sekolah</option>
                                    <option value="Putus SD">Putus SD</option>
                                    <option value="SD">SD Sederajat</option>
                                    <option value="SMP">SMP Sederajat</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4/s1">D4/S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pekerjaan</label>
                            <div class="col-sm-9">
                                <select name="Pekerjaan_Ayah" class="form-control" id="exampleSelectGender">
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang besar">Pedagang Besar</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                    <option value="meninggal dunia">Meninggal Dunia</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Penghasilan
                                Bulanan</label>
                            <div class="col-sm-9">
                                <select name="Penghasilan_Ayah" class="form-control" id="exampleSelectGender">
                                    <option value="kurang_500.000">Kurang dari Rp.500.000</option>
                                    <option value="500.000-999.999">Rp.500.000 - Rp.999.999</option>
                                    <option value="1juta-1.999.999">1 juta - Rp.1.999.999</option>
                                    <option value="2juta-4.999.999">2 juta - Rp.4.999.999</option>
                                    <option value="5juta-20juta">5 juta - 20 juta</option>
                                    <option value="lebih_20juta">Lebih dari 20 juta</option>
                                    <option value="tidak_berpenghasilan">Tidak Berpenghasilan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Berkebutuhan
                                Khusus</label>
                            <div class="col-sm-9">
                                <select name="Berkebutuhan_Khusus_Ayah" class="form-control" id="exampleSelectGender">
                                    <option value="Tidak">Tidak</option>
                                    <option value="Netra">Netra</option>
                                    <option value="Rungu">Rungu</option>
                                    <option value="Grahita_ringan">Grahita Ringan</option>
                                    <option value="Grahita_Sedang">Grahita Sedang</option>
                                    <option value="Daksa_Ringan">Daksa Ringan</option>
                                    <option value="Daksa_Sedang">Daksa Sedang</option>
                                    <option value="Laras">Larasa</option>
                                    <option value="Wicara">Wicara</option>
                                    <option value="Tuna_ganda">Tuna Ganda</option>
                                    <option value="Hiper_aktif">Hiper Aktif</option>
                                    <option value="Cerdas_Isimewa">Cerdas Isimewa</option>
                                    <option value="Bakat_Istimewa">Bakat Istimewa</option>
                                    <option value="Kesulitan_Belajra">Kesulitan Belajar</option>
                                    <option value="Narkoba">Narkoba</option>
                                    <option value="Indigo">Indigo</option>
                                    <option value="Down_Sindrome">Down Sindrome</option>
                                    <option value="Autis">Autis</option>
                                </select>
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
                                    #placeholder="Nama Ibu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input input name="NIK_Ibu" type="text" class="form-control" id="exampleInputUsername2"
                                    #placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-sm-9">
                                <input input name="Tanggal_Lahir_Ibu" type="date" class="form-control"
                                    id="exampleInputUsername2" #placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pendidikan</label>
                            <div class="col-sm-9">
                                <select name="Pendidikan_Ibu" class="form-control" id="exampleSelectGender">
                                    <option value="Tidak sekolah">Tidak Sekolah</option>
                                    <option value="Putus SD">Putus SD</option>
                                    <option value="SD">SD Sederajat</option>
                                    <option value="SMP">SMP Sederajat</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4/s1">D4/S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pekerjaan</label>
                            <div class="col-sm-9">
                                <select name="Pekerjaan_Ibu" class="form-control" id="exampleSelectGender">
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang besar">Pedagang Besar</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                    <option value="meninggal dunia">Meninggal Dunia</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Penghasilan
                                Bulanan</label>
                            <div class="col-sm-9">
                                <select name="Penghasilan_Ibu" class="form-control" id="exampleSelectGender">
                                    <option value="kurang_500.000">Kurang dari Rp.500.000</option>
                                    <option value="500.000-999.999">Rp.500.000 - Rp.999.999</option>
                                    <option value="1juta-1.999.999">1 juta - Rp.1.999.999</option>
                                    <option value="2juta-4.999.999">2 juta - Rp.4.999.999</option>
                                    <option value="5juta-20juta">5 juta - 20 juta</option>
                                    <option value="lebih_20juta">Lebih dari 20 juta</option>
                                    <option value="tidak_berpenghasilan">Tidak Berpenghasilan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Berkebutuhan
                                Khusus</label>
                            <div class="col-sm-9">
                                <select name="Berkebutuhan_Khusus_Ibu" class="form-control" id="exampleSelectGender">
                                    <option value="Tidak">Tidak</option>
                                    <option value="Netra">Netra</option>
                                    <option value="Rungu">Rungu</option>
                                    <option value="Grahita_ringan">Grahita Ringan</option>
                                    <option value="Grahita_Sedang">Grahita Sedang</option>
                                    <option value="Daksa_Ringan">Daksa Ringan</option>
                                    <option value="Daksa_Sedang">Daksa Sedang</option>
                                    <option value="Laras">Larasa</option>
                                    <option value="Wicara">Wicara</option>
                                    <option value="Tuna_ganda">Tuna Ganda</option>
                                    <option value="Hiper_aktif">Hiper Aktif</option>
                                    <option value="Cerdas_Isimewa">Cerdas Isimewa</option>
                                    <option value="Bakat_Istimewa">Bakat Istimewa</option>
                                    <option value="Kesulitan_Belajra">Kesulitan Belajar</option>
                                    <option value="Narkoba">Narkoba</option>
                                    <option value="Indigo">Indigo</option>
                                    <option value="Down_Sindrome">Down Sindrome</option>
                                    <option value="Autis">Autis</option>
                                </select>
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
                                <input input name="Nama_Wali" type="text" class="form-control"
                                    id="exampleInputUsername2" #placeholder="Nama Ibu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input input name="NIK_Wali" type="text" class="form-control" id="exampleInputUsername2"
                                    #placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-sm-9">
                                <input input name="Tanggal_Lahir_Wali" type="date" class="form-control"
                                    id="exampleInputUsername2" #placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pendidikan</label>
                            <div class="col-sm-9">
                                <select name="Pendidikan_Wali" class="form-control" id="exampleSelectGender">
                                    <option value="Tidak sekolah">Tidak Sekolah</option>
                                    <option value="Putus SD">Putus SD</option>
                                    <option value="SD">SD Sederajat</option>
                                    <option value="SMP">SMP Sederajat</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4/s1">D4/S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Pekerjaan</label>
                            <div class="col-sm-9">
                                <select name="Pekerjaan_Wali" class="form-control" id="exampleSelectGender">
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang besar">Pedagang Besar</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                    <option value="meninggal dunia">Meninggal Dunia</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleInputUsername2">Penghasilan
                                Bulanan</label>
                            <div class="col-sm-9">
                                <select name="Penghasilan_Wali" class="form-control" id="exampleSelectGender">
                                    <option value="kurang_500.000">Kurang dari Rp.500.000</option>
                                    <option value="500.000-999.999">Rp.500.000 - Rp.999.999</option>
                                    <option value="1juta-1.999.999">1 juta - Rp.1.999.999</option>
                                    <option value="2juta-4.999.999">2 juta - Rp.4.999.999</option>
                                    <option value="5juta-20juta">5 juta - 20 juta</option>
                                    <option value="lebih_20juta">Lebih dari 20 juta</option>
                                    <option value="tidak_berpenghasilan">Tidak Berpenghasilan</option>
                                </select>
                            </div>
                        </div>
                        <h4 class="card-title">KONTAK</h4>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor telepon
                                Rumah</label>
                            <div class="col-sm-9">
                                <input input name="No_Tlp_Rumah" type="text" class="form-control"
                                    id="exampleInputUsername2" #placeholder="Nama Ibu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-9">
                                <input input name="No_HP" type="text" class="form-control" id="exampleInputUsername2"
                                    #placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input input name="email" type="text" class="form-control" id="exampleInputUsername2"
                                    #placeholder="NIK">
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
                                    <input input name="Tinggi_Badan" type="text" class="form-control"
                                        id="exampleInputName1" #placeholder="Tinggi Badan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Berat Badan</label>
                                <div class="col-sm-9">
                                    <input input name="Berat_Badan" type="text" class="form-control"
                                        id="exampleInputEmail3" #placeholder="Berat Badan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" class="col-sm-3 col-form-label">Jarak tempat
                                    tinggal ke sekolah</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label" class="col-sm-3 col-form-label">
                                            <input type="radio" class="form-check-input" name="Jarak"
                                                id="membershipRadios1" value="Kurang_1KM" checked>
                                            Kurang dari 1 km
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label" class="col-sm-3 col-form-label">
                                            <input type="radio" class="form-check-input" name="Jarak"
                                                id="membershipRadios2" value="Lebih_1KM">
                                            Lebih dari 1 km
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Sebutkan dalam
                                    kilometer</label>
                                <div class="col-sm-9">
                                    <input input name="Jarak_Sebut" type="text" class="form-control"
                                        id="exampleInputEmail3" #placeholder="Jumlah Saudara">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Waktu tempuh ke
                                    sekolah</label>
                                <div class="col-sm-9">
                                    <input input name="Waktu_Tempuh" type="text" class="form-control"
                                        id="exampleInputEmail3" #placeholder="Jumlah Saudara">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Jumlah Saudara
                                    Kandung</label>
                                <div class="col-sm-9">
                                    <input input name="Jumlah_Saudara" type="text" class="form-control"
                                        id="exampleInputEmail3" #placeholder="Jumlah Saudara">
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
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label" class="col-sm-2 col-form-label">
                                        <input type="radio" class="form-check-input" name="Jenis_Pendaftaran"
                                            id="membershipRadios1" value="Siswa_Baru" checked>
                                        Siswa Baru
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label" class="col-sm-2 col-form-label">
                                        <input type="radio" class="form-check-input" name="Jenis_Pendaftaran"
                                            id="membershipRadios2" value="Pindahan">
                                        Siswa Pindahan
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label" class="col-sm-2 col-form-label">
                                        <input type="radio" class="form-check-input" name="Jenis_Pendaftaran"
                                            id="membershipRadios2" value="Sekolah_Lagi">
                                        Sekolah Lagi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">No. Induk Siswa</label>
                            <div class="col-sm-9">
                                <input input name="No_Induk" type="text" class="form-control" id="exampleInputEmail3"
                                    #placeholder="No Induk Siswa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input input name="Tanggal_Masuk" type="date" class="form-control"
                                    id="exampleInputEmail3" #placeholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Sekolah Sebelumnya</label>
                            <div class="col-sm-9">
                                <input input name="Sekolah_Sebelumnya" type="text" class="form-control"
                                    id="exampleInputEmail3" #placeholder="Tanggal Masuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Masuk Rombel</label>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="Masuk_Rombel"
                                            id="membershipRadios1" value="A" checked>
                                        A (4-5 Tahun)
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="Masuk_Rombel"
                                            id="membershipRadios2" value="B">
                                        B (5-6 Tahun)
                                    </label>
                                </div>
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
                                    <select name="keluar" class="form-control" id="exampleSelectGender">
                                        <option value="Lulus">Lulus</option>
                                        <option value="Mutasi">Mutasi</option>
                                        <option value="Dikeluarkan">Dikeluarkan</option>
                                        <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                                        <option value="Putus Sekolah">Putus Sekolah</option>
                                        <option value="Wafat">Wafat</option>
                                        <option value="Hilang">Hilang</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Tanggal Keluar</label>
                                <div class="col-sm-9">
                                    <input input name="Tanggal_Keluar" type="date" class="form-control"
                                        id="exampleInputEmail3" #placeholder="Tanggal Masuk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 col-form-label">Alasan</label>
                                <div class="col-sm-9">
                                    <input input name="Alasan_Keluar" type="text" class="form-control"
                                        id="exampleInputEmail3" #placeholder="Tanggal Masuk">
                                </div>
                            </div>
                            <div class="row form-group mt-4">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="page-footer bg-image" style="background-image: url(../siswa/img/footer.png);">
        <div class="container">

            <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a
                    href="https://macodeid.com/" target="_blank">MACode ID</a></p>
        </div>
    </footer>

    <script src={{asset("siswa/js/jquery-3.5.1.min.js")}}></script>

    <script src={{asset("siswa/js/bootstrap.bundle.min.js")}}></script>

    <script src={{asset("siswa/js/google-maps.js")}}></script>

    <script src={{asset("siswa/vendor/wow/wow.min.js")}}></script>

    <script src={{asset("siswa/js/theme.js")}}></script>

</body>

</html>
