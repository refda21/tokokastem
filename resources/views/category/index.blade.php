@extends('admin.master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
{{--        <h1 class="h3 mb-2 text-gray-800">Daftar Chapter Mata Pelajaran PKN</h1>--}}

{{--        <nav aria-label="breadcrumb">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item active"><a href="/bank-soal">Mata Pelajaran</a></li>--}}
{{--                <li class="breadcrumb-item"><a href="/bab">Bab </a></li>--}}
{{--                <li class="breadcrumb-item"><a href="/soal">Soal </a></li>--}}
{{--            </ol>--}}
{{--        </nav>--}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="m-0 font-weight-bold text-primary">Daftar Transaksi</p>
                <hr>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi </th>
                            <th>Status Transaksi </th>
                            <th>Aksi </th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td><a href="">27 April 2020</a></td>
                            <td><a href="">Pending</a></td>
                            <td>
                                <button class="btn btn-outline-primary">
                                    Lihat
                                </button>
                                <button class="btn btn-outline-success">
                                    Ubah
                                </button>
                                <button class="btn btn-outline-danger">
                                    Hapus
                                </button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
