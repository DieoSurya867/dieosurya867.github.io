@extends('layout.admin')

@section('title')
    Tambah Data - Admin | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ url('admin') }}" method="POST">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Tambah Data</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card mb-4">

                    <h5 class="card-header">Form Controls</h5>
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                            <input type="text"
                                class="form-control @error('namaProduk') is-invalid
                          @enderror"
                                id="exampleFormControlInput1" placeholder="Name Project" name="namaProduk"
                                value="{{ old('namaProduk') }}" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Harga Produk</label>
                            <input class="form-control @error('hargaProduk') is-invalid
                          @enderror"
                                type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..."
                                name="hargaProduk" value="{{ old('hargaProduk') }}" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Sekolah</label>
                            <select class="form-select @error('sekolah_id') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="kategori_id">
                                <option selected>Pilih Nama Kategori</option>
                                @foreach ($data2 as $item)
                                    <option value="{{ $item->id }}" @selected(old('kategori_id') == $item->id)>
                                        {{ $item->namaKategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Status Project</label>
                            <input class="form-control @error('status') is-invalid
                          @enderror"
                                list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="status"
                                value="{{ old('status') }}" />
                            <datalist id="datalistOptions">
                                <option value="ACTIVE">ACTIVE</option>
                                <option value="PENDING">PENDING</option>
                                <option value="COMPLETED">COMPLETED</option>
                                <option value="DELAYED">DELAYED</option>
                                <option value="MAINTANCE">MAINTENANCE</option>
                            </datalist>
                        </div> --}}

                        <div>
                            <button type="submit" class="ms-1 btn btn-sm  btn-outline-primary">Tambah Data</button>

                        </div>
                    </div>
                </div>
    </form>
    </div>
    </div>
@endsection
