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
                                <tbody>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>53275531</td>
                                        <td>12 May 2017</td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                    </tr>
                                    <tr>
                                        <td>Messsy</td>
                                        <td>53275532</td>
                                        <td>15 May 2017</td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
                                    <tr>
                                        <td>John</td>
                                        <td>53275533</td>
                                        <td>14 May 2017</td>
                                        <td><label class="badge badge-info">Fixed</label></td>
                                    </tr>
                                    <tr>
                                        <td>Peter</td>
                                        <td>53275534</td>
                                        <td>16 May 2017</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                    </tr>
                                    <tr>
                                        <td>Dave</td>
                                        <td>53275535</td>
                                        <td>20 May 2017</td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
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
