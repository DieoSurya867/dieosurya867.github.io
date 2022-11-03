@extends('layout.admin')

@section('title')
    Edit Data - Kategori | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put');

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Edit Data</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                            <input type="text"
                                class="form-control @error('namaKategori') is-invalid
                          @enderror"
                                id="exampleFormControlInput1" placeholder="Name Kategori" name="namaKategori"
                                value="{{ $kategori->namaKategori }}" />
                        </div>

                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid d-flex mx-auto my-4"
                                        src="{{ asset('storage/' . $kategori->foto) }}" alt="Card image cap" />
                                </div>
                            </div>
                            {{-- <img src="{{ asset('storage/' . $galeri->photos) }}" alt=""> --}}
                            <label for="formFile" class="form-label">Ganti Data Foto Kategori</label>
                            <input class="form-control" type="file" id="formFile" name="foto" />
                        </div>
                        <button type="submit" class="ms-1 btn btn-sm  btn-outline-primary">Upload Data Terbaru</button>
                    </div>
                </div>
    </form>
    </div>
    </div>
@endsection
