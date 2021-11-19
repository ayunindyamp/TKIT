@extends('layouts.master')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Form Pendaftar</h>
                    </div>
                </div>
                <a href="/pendaftaran/export" type="button" class="f btn btn-outline-info btn-icon-text">Print<i
                        class="ti-printer btn-icon-append"></i></a>
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
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>Penerima KIP</th>
                                        <th>Status</th>
                                        <th>Verifikasi</th>
                                    </tr>
                                </thead>
                                @foreach($data_pendaftaran as $pendaftaran)
                                <tbody>
                                    <tr>
                                        <td>{{$pendaftaran->timestamps}}</td>
                                        <td>{{$pendaftaran->created_at}}</td>
                                        <td><a href="/pendaftaran/{{$pendaftaran->id}}/detail">{{$pendaftaran->Nama_Lengkap}}
                                        </td>
                                        <td>{{$pendaftaran->Alamat_Jalan}}</td>
                                        <td>{{$pendaftaran->Penerima_KIP}}</td>
                                        <td><label
                                                class="badge {{($pendaftaran->verifikasi==1) ? 'badge-warning' : 'badge-success'}}">{{ ($pendaftaran->verifikasi ==1) ?'Pending':'Diterima'}}</label>
                                        </td>
                                        <td>
                                            
                                                @if($pendaftaran->verifikasi==1)
                                                <a href="/pendaftaran/{{$pendaftaran->id}}/verifikasi"
                                                    type="button" class="btn btn-inverse-success btn-icon btn-sm"> <i
                                                        class="ti-check"></i> </a>
                                                @else
                                                <a href="/pendaftaran/{{$pendaftaran->id}}/verifikasi"
                                                    type="button" class="btn btn-inverse-warning btn-icon btn-sm "> <i
                                                        class="ti-close"></i></a>
                                                @endif
                                            </form>
                                        </td>
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
