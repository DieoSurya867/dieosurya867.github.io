@extends('layout.store')


@section('title')
    Checkout
@endsection
@section('content')
    <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ url('user/cart') }}">Keranjang</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <!-- BILLING ADDRESS-->
            <h3 class=" text-uppercase mb-4">detail pembeli</h3>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row gy-3">
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase fw-bold" for="firstName">Nama Pembeli </label>
                            <input class="form-control-plaintext form-control-lg" type="text" id="firstName"
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase fw-bold" for="email">Email</label>
                            <input class="form-control-plaintext form-control-lg" type="email" id="email"
                                value="{{ Auth::user()->email }}">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label text-sm text-uppercase fw-bold" for="phone">No. HP</label>
                            <input class="form-control form-control-lg" type="tel" id="phone">
                        </div>
                        <h3 class=" text-uppercase mt-5">alamat</h3>
                        <div class="form-group col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="fw-bold">Provinsi</label>
                                <select class="form-control" id="provinces" onchange="daerah(id,value)">
                                    <option value="">cari provinsi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="fw-bold">Kabupaten</label>
                                <select class="form-control" id="regencies" onchange="daerah(id,value)">
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="fw-bold">Kecamatan</label>
                                <select class="form-control" id="districts" onchange="daerah(id,value)">
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="fw-bold">Kelurahan</label>
                                <select class="form-control" id="villages" onchange="daerah(id,value)">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Alamat Lengkap</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <!-- ORDER SUMMARY-->
                <div class="col-lg-4">
                    <div class="card border-0 rounded-0 p-lg-4 bg-light">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4">Pesanan Anda</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="small fw-bold">Red digital smartwatch</strong><span
                                        class="text-muted small">$250</span></li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="small fw-bold">Gray Nike running shoes</strong><span
                                        class="text-muted small">$351</span></li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small fw-bold">Total</strong><span>$601</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                      <button class="btn btn-dark fw-bold" type="submit">Bayar</button>
                  </div>
                </div>
            </div>
        </section>
    </div>
@endsection
