@extends('layout.admin')

@section('title')
    Edit Data - Galeri | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT');

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Edit Foto</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Ganti Produk</label>
                            <select class="form-select @error('produk_id') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="produk_id">
                                <option selected>Pilih Nama Produk</option>
                                @foreach ($produk as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $galeri->produk_id ? 'selected' : '' }}>
                                        {{ $item->namaProduk }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid d-flex mx-auto my-4"
                                        src="{{ asset('storage/' . $galeri->fotoProdukPertama) }}" alt="Card image cap" />
                                </div>
                            </div>
                            {{-- <img src="{{ asset('storage/' . $galeri->photos) }}" alt=""> --}}
                            <label for="formFile" class="form-label">File Foto Produk Awal</label>
                            <input class="form-control" type="file" id="formFile" name="fotoProdukPertama" />
                        </div>
                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid d-flex mx-auto my-4"
                                        src="{{ asset('storage/' . $galeri->fotoProdukKedua) }}" alt="Card image cap" />
                                </div>
                            </div>

                            {{-- <img src="{{ asset('storage/' . $galeri->photos) }}" alt=""> --}}

                            <label for="formFile" class="form-label">File Foto Produk Kedua</label>
                            <input class="form-control" type="file" id="formFile" name="fotoProdukKedua" />
                        </div>
                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid d-flex mx-auto my-4"
                                        src="{{ asset('storage/' . $galeri->fotoProdukKetiga) }}" alt="Card image cap" />
                                </div>
                            </div>

                            {{-- <img src="{{ asset('storage/' . $galeri->photos) }}" alt=""> --}}

                            <label for="formFile" class="form-label">File Foto Produk Ketiga</label>
                            <input class="form-control" type="file" id="formFile" name="fotoProdukKetiga" />
                        </div>
                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid d-flex mx-auto my-4"
                                        src="{{ asset('storage/' . $galeri->fotoProdukKeempat) }}" alt="Card image cap" />
                                </div>
                            </div>

                            {{-- <img src="{{ asset('storage/' . $galeri->photos) }}" alt=""> --}}

                            <label for="formFile" class="form-label">File Foto Produk Keempat</label>
                            <input class="form-control" type="file" id="formFile" name="fotoProdukKeempat" />
                        </div>
                        <button type="submit" class="ms-1 btn btn-sm  btn-outline-primary">Upload Data</button>
                    </div>
                </div>
    </form>
    </div>
    </div>
@endsection
