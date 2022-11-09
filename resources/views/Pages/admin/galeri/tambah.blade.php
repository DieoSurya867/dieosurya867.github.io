@extends('layout.admin')

@section('title')
    Tambah Data - Kategori | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ url('admin/galeri') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / Kategori / </span> Tambah Data</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card mb-4">

                    <h5 class="card-header">Form Controls</h5>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Sekolah</label>
                            <select class="form-select @error('produk_id') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="produk_id">
                                <option selected>Pilih Nama Produk</option>
                                @foreach ($produk as $item)
                                    <option value="{{ $item->id }}" @selected(old('produk_id') == $item->id)>
                                        {{ $item->namaProduk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">File Foto Kategori</label>
                            <input class="form-control" type="file" id="formFile" name="fotoProdukPertama" />
                        </div>
                        <div>
                            <button type="submit" class="ms-1 btn btn-sm  btn-outline-primary">Tambah Data</button>
                        </div>
                    </div>
                </div>
    </form>
    </div>
    </div>
@endsection
