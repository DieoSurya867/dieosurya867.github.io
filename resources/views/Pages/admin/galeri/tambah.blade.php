@extends('layout.admin')

@section('title')
    Tambah Data - galeri | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Tambah Data</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Link Produk</label>
                            <select class="form-select @error('produk_id') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="produk_id">
                                <option selected>Pilih Pada Product</option>
                                @foreach ($produk as $item)
                                    <option value="{{ $item->id }}" @selected(old('produk_id') == $item->id)>
                                        {{ $item->namaProduk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="photos" />
                        </div>
                        <button type="submit" class="ms-1 btn btn-sm  btn-outline-primary">Upload Data</button>
                    </div>
                </div>
    </form>
    </div>
    </div>
@endsection
