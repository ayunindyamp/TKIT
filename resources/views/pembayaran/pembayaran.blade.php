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
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Laman Pembayaran</h4>
                        <p class="card-description">
                            Upload Bukti Pembayaran
                        </p>
                        <form action="{{ url('pembayaran/pembayaran') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Atas Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputName1"
                                    placeholder="Atas Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Bank yang dituju</label>
                                <select name="bank" class="form-control" id="exampleSelectGender">
                                    <option value="bni">BNI</option>
                                    <option value="bri">BRI</option>
                                    <option value="mandiri">Mandiri</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="file">Bukti Pembayaran</label>
                                <input name="lampiran" type="file" id="subject" class="form-control">
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

