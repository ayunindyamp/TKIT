@extends('layouts.master')

@section('content')




    <div class="container">
        <div class="row justify-content-center align-items-center h-100">
            <form action="{{ url('pendaftaran/create') }}" method="POST" class="contact-form py-5 px-lg-5">
                @csrf
                <h2 class="mb-4 font-weight-medium text-secondary">Identitas Siswa</h2>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Nama Lengkap</label>
                        <input name="nama_calon" type="subject" id="subject" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Jenis Kelamin</label>
                        <input name="jenis_kelamin" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Tempat Lahir</label>
                        <input name="tempat_lahir" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Agama</label>
                        <input name="agama" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Kewarganegaraan</label>
                        <input name="kewarganegaraan" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Alamat Lengkap</label>
                        <input name="alamat" type="message" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Tinggal Bersama</label>
                        <input name="tinggal" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Anak Ke</label>
                        <input name="anak_ke" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Usia</label>
                        <input name="usia" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">No. Hp</label>
                        <input name="no_tlp" type="subject" id="subject" class="form-control">
                    </div>
                </div>
                <h2 class="mb-4 font-weight-medium text-secondary">Orang Tua</h2>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Nama Ayah</label>
                        <input name="nama_ayah" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">NIK</label>
                        <input name="nik_ayah" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Tanggal Lahir</label>
                        <input name="tahun_lahir_ayah" type="date" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Pendidikan</label>
                        <input name="pendidikan_ayah" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Pekerjaan</label>
                        <input name="pekerjaan_ayah" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Nama Ibu</label>
                        <input name="nama_ibu" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">NIK</label>
                        <input name="nik_ibu" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Tanggal Lahir</label>
                        <input name="tahun_lahir_ibu" type="date" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Pendidikan Terakhir</label>
                        <input name="pendidikan_ibu" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Pekerjaan</label>
                        <input name="pekerjaan_ibu" type="subject" id="subject" class="form-control">
                    </div>
                </div>
                <h2 class="mb-4 font-weight-medium text-secondary">Periodik</h2>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Tinggi Badan</label>
                        <input name="tinggi_badan" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Berat Badan</label>
                        <input name="berat_badan" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Jarak Tempuh</label>
                        <input name="jarak_tempuh" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Jumlah Saudara</label>
                        <input name="jumlah_saudara" type="subject" id="subject" class="form-control">
                    </div>
                </div>
                <h2 class="mb-4 font-weight-medium text-secondary">Register</h2>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="jenis_pendaftaran">Jenis Pendaftaran</label>
                        <select name="jenis_pendaftaran" id="jenis_pendaftaran">
                            <option value="siswa_baru">Siswa Baru</option>
                            <option value="pindahan">Siswa Pindahan</option>
                            <option value="sekolah_lagi">Sekolah Lagi</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <label class="text-black" for="masuk_rombel">Masuk Rombel</label>
                        <select name="jenis_pendaftaran" id="jenis_pendaftaran">
                            <option value="a">A (4-5 tahun)</option>
                            <option value="b">Siswa Pindahan</option>
                            <option value="sekolah_lagi">B (5-6 tahun)</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">Tanggal Masuk</label>
                        <input name="tanggal_masuk" type="date" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="subject">No. Induk</label>
                        <input name="no_induk" type="subject" id="subject" class="form-control">
                    </div>
                </div>

                <div class="row form-group mt-4">
                    <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 px-0">
            <div class="maps-container">
                <div id="google-maps"></div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 py-3">
                    <h3>SEOGram</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis
                        in iusto eligendi iure.</p>

                    <div class="social-media-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                        <a href="#"><span class="mai-logo-youtube"></span></a>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Help & Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Contact Us</h5>
                    <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                    <a href="#" class="footer-link">+00 1122 3344 5566</a>
                    <a href="#" class="footer-link">seogram@temporary.com</a>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Newsletter</h5>
                    <p>Get updates, news or events on your mail.</p>
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Enter your email..">
                        <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
                    </form>
                </div>
            </div>

            <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a
                    href="https://macodeid.com/" target="_blank">MACode ID</a></p>
        </div>
        @endsection