@extends('master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="FormControlSelectMaPel">Pilih Kategori</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Pilih Kategori</option>
                        <option>Masker</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gambar</label>

                    <form>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </form>

                    <script>
                        // Add the following code if you want the name of the file appear on select
                        $(".custom-file-input").on("change", function() {
                            var fileName = $(this).val().split("\\").pop();
                            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        });
                    </script>

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Deskripsi</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Stock</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
            </form>

            <button type="button" class="btn btn-primary">Simpan</button>
        </div>
    </div>
@endsection
