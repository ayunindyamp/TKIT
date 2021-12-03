@extends('layouts.master')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Pembayaran</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <p class="card-title">Detail Pembayaran</p>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Atas Nama</th>
                                        <th>Bank</th>
                                        <th>Bukti Transfer</th>
                                        <th>Status</th>
                                        <th>Verifikasi</th>
                                    </tr>
                                </thead>
                                @foreach($data_pembayaran as $pembayaran)
                                <tbody>
                                    <tr>
                                        <td>{{$pembayaran->nama}}</td>
                                        <td>{{$pembayaran->bank}}
                                        <td><img src="/pembayaran/{{$pembayaran->id}}/lampiran">{{$pembayaran->lampiran}}</td>
                                        <td><label
                                                class="badge {{($pembayaran->verifikasi==1) ? 'badge-warning' : 'badge-success'}}">{{ ($pembayaran->verifikasi ==1) ?'Pending':'Diterima'}}</label>
                                        </td>
                                        <td>
                                            
                                                @if($pembayaran->verifikasi==1)
                                                <a onclick="return confirm('Apakah anda menerima pembayaran {{$pembayaran->nama}}?')" href="/pembayaran/{{$pembayaran->id}}/verifikasi"
                                                    type="button" class="btn btn-inverse-success btn-icon btn-sm"> <i
                                                        class="ti-check"></i> </a>
                                                @else
                                                <a href="/pembayaran/{{$pembayaran->id}}/verifikasi"
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
