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
                <a class="navbar-brand brand-logo mr-5" href="#"><img src={{asset("siswa/img/logo.png")}} class="mr-2"
                        alt="logo" /></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Daftar Akun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pendaftaran/create') }}">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pembayaran/pembayaran') }}">Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-2" href="#">Login</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

</header>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Identitas Siswa</h4>
                        <p class="card-description">
                            Isikan dengan Identitas Siswa
                        </p>
                        <form action="{{ url('pendaftaran/create') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama
                                    Lengkap</label>
                                <div class="col-sm-9">
                                    <input name="nama_calon" type="text" class="form-control" id="exampleInputUsername2"
                                        placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jenis
                                    Kelamin</label>
                                <div class="col-sm-9">
                                    <input name="jenis_kelamin" type="text" class="form-control"
                                        id="exampleInputUsername2" placeholder="Jenis Kelamin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Tempat
                                    Lahir</label>
                                <div class="col-sm-9">
                                    <input name="tempat_lahir" type="text" class="form-control"
                                        id="exampleInputUsername1" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Tanggal
                                    Lahir</label>
                                <div class="col-sm-9">
                                    <input name="tanggal_lahir" type="date" class="form-control"
                                        id="exampleInputUsername1" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <input name="agama" type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Agama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1"
                                    class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-9">
                                    <input name="kewarganegaraan" type="text" class="form-control"
                                        id="exampleInputUsername1" placeholder="Kewarganegaraan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Alamat
                                    Lengkap</label>
                                <div class="col-sm-9">
                                    <input name="alamat" type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Alamat Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Tinggal
                                    Bersama</label>
                                <div class="col-sm-9">
                                    <input name="tinggal" type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Tinggal Bersama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Anak
                                    Ke</label>
                                <div class="col-sm-9">
                                    <input name="anak_ke" type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Anak Ke">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Usia</label>
                                <div class="col-sm-9">
                                    <input name="usia" type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Usia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername1" class="col-sm-3 col-form-label">No.
                                    HP</label>
                                <div class="col-sm-9">
                                    <input name="no_tlp" type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="No. HP">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Orang Tua</h4>
                        <p class="card-description">
                            Isikan dengan data Ayah
                        </p>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Ayah</label>
                            <div class="col-sm-9">
                                <input input name="nama_ayah" type="text" class="form-control"
                                    id="exampleInputUsername2" placeholder="Nama Ayah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input input name="nik_ayah" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-sm-9">
                                <input input name="tahun_lahir_ayah" type="date" class="form-control"
                                    id="exampleInputUsername2" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Pendidikan
                                Terakhir</label>
                            <div class="col-sm-9">
                                <input input name="pendidikan_ayah" type="text" class="form-control"
                                    id="exampleInputUsername2" placeholder="Pendidikan Terakhir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input input name="pekerjaan_ayah" type="text" class="form-control"
                                    id="exampleInputUsername2" placeholder="Pekerjaan">
                            </div>
                        </div>
                        <p class="card-description">
                            Isikan dengan data Ibu
                        </p>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Ibu</label>
                            <div class="col-sm-9">
                                <input input name="nama_ibu" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="Nama Ibu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input input name="nik_ibu" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-sm-9">
                                <input input name="tahun_lahir_ibu" type="date" class="form-control"
                                    id="exampleInputUsername2" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Pendidikan
                                Terakhir</label>
                            <div class="col-sm-9">
                                <input input name="pendidikan_ibu" type="text" class="form-control"
                                    id="exampleInputUsername2" placeholder="Pendidikan Terakhir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input input name="pekerjaan_ibu" type="text" class="form-control"
                                    id="exampleInputUsername2" placeholder="Pekerjaan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Periodik</h4>
                        <p class="card-description">
                            Isi berdasarkan data Siswa
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Tinggi Badan</label>
                                <input input name="tinggi_badan" type="text" class="form-control" id="exampleInputName1"
                                    placeholder="Tinggi Badan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Berat Badan</label>
                                <input input name="berat_badan" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="Berat Badan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Jarak Tempuh</label>
                                <input input name="jarak_tempuh" type="text" class="form-control"
                                    id="exampleInputEmail3" placeholder="Jarak Tempuh">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Jumlah Saudara</label>
                                <input input name="jumlah_saudara" type="text" class="form-control"
                                    id="exampleInputEmail3" placeholder="Jumlah Saudara">
                            </div>
                            <h4 class="card-title">Register</h4>
                            <p class="card-description">
                                Isi berdasarkan data Siswa
                            </p>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jenis_pendaftaran"
                                                id="membershipRadios1" value="siswa_baru" checked>
                                            Siswa Baru
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jenis_pendaftaran"
                                                id="membershipRadios2" value="pindahan">
                                            Siswa Pindahan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jenis_pendaftaran"
                                                id="membershipRadios2" value="sekolah_lagi">
                                            Sekolah Lagi
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Masuk</label>
                                <input input name="tanggal_masuk" type="date" class="form-control"
                                    id="exampleInputEmail3" placeholder="Tanggal Masuk">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">No. Induk Siswa</label>
                                <input input name="no_induk" type="text" class="form-control" id="exampleInputEmail3"
                                    placeholder="No Induk Siswa">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Masuk Rombel</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="masuk_rombel"
                                                id="membershipRadios1" value="a" checked>
                                            A (4-5 Tahun)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="masuk_rombel"
                                                id="membershipRadios2" value="b">
                                            SB (5-6 Tahun)
                                        </label>
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
