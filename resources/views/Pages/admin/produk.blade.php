@extends('layout.admin')


@section('title')
    Dashboard - Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Produk</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                    <a href="{{ url('admin/produk/create') }}" class="ms-4 mb-4 btn btn-sm  btn-outline-primary">Tambah
                        Data</a>
                    <a href="{{ route('produk.create') }}" class="ms-4 mb-4 btn btn-sm  btn-outline-primary">Tambah Data
                        Pakai Route</a>
                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Harga Produk</th>
                                <th>Deskripsi</th>
                                <th>Stock</th>
                                <th>Jumlah Terjual</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($data as $item)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $item['namaProduk'] }}</strong>
                                    </td>
                                    <td>{{ $item['hargaProduk'] }}</td>
                                    <td>
                                        <!-- Toggle Between Modals -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mt-3">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modalToggle">
                                                    Tampilkan Deskripsi Lengkap
                                                </button>

                                                <!-- Modal 1-->

                                                <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel"
                                                    tabindex="-1" style="display: none" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalToggleLabel">Deskripsi
                                                                    Lengkap</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">{{ $item->deskripsi }}</div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                </div>

            </div>
        </div>
        {{-- <!-- Button trigger modal -->
                                        <a href="{{ $data }}" type="button" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Tampilkan Deskripsi
                                        </a> --}}
        </td>
        <td>{{ $item['stock'] }}</td>
        <td>{{ $item['jumlahTerjual'] }}</td>
        <td>{{ $item->kategori->namaKategori }}</td>

        {{-- <td>{{ $item->client }}</td> --}}
        <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('produk.edit', $item->id) }}"><i
                            class="bx bx-edit-alt me-1"></i> Edit</a>
                    {{-- <a class="dropdown-item" href="{{ url('deleteproduk/' . $item->id) }}"><i
                                                        class="bx bx-trash me-1"></i> Delete</a> --}}
                    <a class="dropdown-item" href="{{ route('deleteproduk', $item->id) }}"><i class="bx bx-trash me-1"></i>
                        Delete</a>
                </div>
            </div>
        </td>
        </tr>
        @endforeach

        </tbody>
        </table>
    </div>
    </div>
    {{-- <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @foreach ($data as $item)
                                {

                                <p>{{ $item->hargaProduk }}</p>
                                }
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> --}}

    <!--/ Basic Bootstrap Table -->

    <hr class="my-5" />
    <!--/ Responsive Table -->
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
    </div>
@endsection
