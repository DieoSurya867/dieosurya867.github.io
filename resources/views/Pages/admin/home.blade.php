@extends('layout.admin')

@section('dashboardadmin')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="row g-4 m-2">
                <div class="col-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="col-6"><i class="bi bi-box"> Produk</i></div>
                      <div class="col-6">{{ $produk_count }}</div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="col-6"><i class="bi bi-cart4">  Transaksi</i></div>
                      <div class="col-6">{{ $transaksi_count }}</div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="col-6"><i class="bi bi-people-fill">  Customer</i></div>
                      <div class="col-6">{{ $user_count }}</div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="col-6"><i class="bi bi-cash-coin"> Kategori</i></div>
                      <div class="col-6">{{ $kategori }}</div>
                    </div>
                  </div>
                </div>
                <!-- Transaksi -->
  <div class="card mx-2 mb-5 p-1">
    <h5 class="card-header">Transaksi Terbaru</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>alamat</th>
                    <th>Harga ongkir</th>
                    <th>Total Harga</th>
                    <th>Kode Transaksi</th>
                    <th>Status Transaksi</th>
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
                        <td>{{ $t['kode_transaksi'] }}</td>
                        <td>{{ $t['transaksi_status'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
              </div>
          </div>
          <!--/ Basic Bootstrap Table -->



@endsection