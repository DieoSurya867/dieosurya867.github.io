@extends('layout.admin')

@section('title')
    Edit Data - Admin | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ route('produk.update', $data->id) }}" method="POST">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Edit Data</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card mb-4">

                    <h5 class="card-header">Form Controls</h5>
                    <div class="card-body">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                            <input type="text"
                                class="form-control @error('namaProduk') is-invalid
                          @enderror"
                                id="exampleFormControlInput1" placeholder="Name Project" name="namaProduk"
                                value="{{ $data->namaProduk }}" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Harga Produk</label>
                            <input class="form-control @error('hargaProduk') is-invalid
                          @enderror"
                                type="text" id="exampleFormControlReadOnlyInput1" placeholder="Harga Produk"
                                name="hargaProduk" value="{{ $data->hargaProduk }}" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Deskripsi</label>
                            <input class="form-control @error('hargaProduk') is-invalid
                          @enderror"
                                type="text" id="exampleFormControlReadOnlyInput1" placeholder="Deskripsi"
                                name="deskripsi" value="{{ $data->deskripsi }}" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Stock</label>
                            <input class="form-control @error('stock') is-invalid
                          @enderror"
                                type="text" id="exampleFormControlReadOnlyInput1" placeholder="Stock Barang"
                                name="stock" value="{{ $data->stock }}" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Sekolah</label>
                            <select class="form-select @error('sekolah_id') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="kategori_id">
                                <option selected>Pilih Nama Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}"  {{ $item->id == $data->kategori_id ? 'selected' : '' }}>{{ $item->namaKategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <a href="/admin/produk" class="btn btn-danger">Batal</a>
                            <button type="submit" class="ms-1 btn btn-sm  btn-outline-primary">Edit Data</button>

                        </div>
                    </div>
                </div>
    </form>
    </div>
    </div>
@endsection
