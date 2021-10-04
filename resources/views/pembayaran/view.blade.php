@extends('layouts.master')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Pendaftar</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <p class="card-title">Detail Pendaftar</p>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>No. Telp</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                @foreach($data_pembayaran as $pembayaran)
                                <tbody>
                                    <tr>
                                        <td>{{$pembayaran->bank}}</td>
                                        <td>{{$pembayaran->nama}}</td>
                                        <td>"{{asset($pembayaran->lampiran)}}"</td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @endsection
