@extends('layout.store')


@section('title')
    Keranjang - Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection
@section('content')
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col d-flex justify-content-between">
                <h1 class="h2 text-uppercase mb-0">Keranjang</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <h2 class="h5 text-uppercase mb-4">Keranjang Saya</h2>
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table class="table text-nowrap">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Produk</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Harga</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Jumlah</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Subtotal</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase"></strong></th>
                    </tr>
                  </thead>
                  <tbody class="border-0">
                    @foreach($keranjang as $item)
                    {{-- @if($item->user_id == $item->user_id) --}}
                    <tr>
                      <th class="ps-0 py-3 border-light" scope="row">
                        <div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.html"><img src="{{ asset('storage/'. $item->produk->galeri->first()->fotoProduk) }}" alt="..." width="70"/></a>
                          <div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.html">{{ $item->produk->namaProduk }}</a></strong></div>
                        </div>
                      </th>
                      <td class="p-3 align-middle border-light">
                        <p class="mb-0 small">{{ 'Rp.' . ' ' .number_format($item->produk->hargaProduk,2,",",".")  }}</p>
                      </td>
                      <td class="p-3 align-middle border-light">
                        <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family">Jumlah</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left" id="kurang"></i></button>
                            <input class="form-control form-control-sm border-0 shadow-0 p-0" type="text" id="jumlah" value="1"/>
                            <button class="inc-btn p-0"><i class="fas fa-caret-right" id="tambah"></i></button>
                          </div>
                        </div>
                      </td>
                      <td class="p-3 align-middle border-light">
                        <p class="mb-0 small" id="subtotal">$250</p>
                      </td>
                      <td class="p-3 align-middle border-light"><a class="reset-anchor" href="#!"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                    </tr>
                    {{-- @endif --}}                  
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 text-md-start"><a class="btn btn-outline-dark btn-sm" href="{{ url('/') }}"><i class="fas fa-long-arrow-alt-left me-2"></i> Lanjutkan Belanja</a></div>
                </div>
              </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Cart total</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span id="total">total harga</span></li>
                    <li>
                      <form action="{{ url('user/check') }}">
                        <div class="input-group mb-0">
                          <button class="btn btn-dark btn-sm w-100" type="submit">CHECKOUT<i class="fas fa-long-arrow-alt-right ms-2"></i></button>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  @endsection