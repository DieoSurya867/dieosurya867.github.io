@extends('layout.admin')

@section('dashboardadmin')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="row row-cols-1 row-cols-md-2 g-4 m-3 mb-2">
                <div class="col">
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
              </div>

                <!-- Expense Overview -->
                <div class="container">
                  <div class="card">
                  <div class="col-6"><i class="bi bi-clipboard-data"></i></div>
                  <div class="col-6">Grafik</div>
                <div>
                  <p class="mb-1 mt-3"><center>Pengunjung Satu Bulan Terakhir<center></p>
                </div>
              </div>

                </div>
                <!--/ Expense Overview -->

@endsection