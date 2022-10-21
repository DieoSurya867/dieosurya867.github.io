@extends('layout.admin')


@section('title')
    Dashboard - Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection
@section('transaksi')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- Transaksi -->
            <div class="card">
                <h5 class="card-header">Transaksi</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>id</th>
                                <th>alamat</th>
                                <th>Harga ongkir</th>
                                <th>Total Harga</th>
                                <th>Status Transaksi</th>
                                <th>Kode Transaksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($transaksi as $t)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $t['id'] }}</strong>
                                    </td>
                                    <td>{{ $t['alamat'] }}</td>
                                    <td>{{ $t['harga_ongkir'] }}</td>
                                    <td>{{ $t['total_harga'] }}</td>
                                    <td>{{ $t['transkasi_status'] }}</td>
                                    <td>{{ $t['kode_transaksi'] }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <hr class="my-5" />
            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
