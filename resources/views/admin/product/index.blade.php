@extends('admin.master')
@section('content')
{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            <H2>MANAGE PRODUCT</H2>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <!-- DataTales Example -->--}}
{{--            <div class="card shadow mb-4">--}}
{{--                <div class="card-header py-3">--}}
{{--                    <p class="m-0 font-weight-bold text-primary"></p>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Nomor </th>--}}
{{--                                <th>Mata Pelajaran</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($subjects as $subject)--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        {{$subject->id}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="/bab">{{$subject->name}}</a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        </div>--}}

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <p class="m-0 font-weight-bold text-primary">manage product</p>
            <hr>
            <a href="{{route('product.create')}}">tambah produk</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>id </th>
                        <th>title</th>
                        <th>description</th>
                        <th>price</th>
                        <th>image</th>
                        <th>size</th>
                        <th>status</th>
                        <th>category</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @foreach($subjects as $subject)--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                {{$subject->id}}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <a href="/bab">{{$subject->name}}</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
