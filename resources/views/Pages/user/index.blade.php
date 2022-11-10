@extends('layout.store')


@section('title')
    O_MAL | Ecommerce bootstrap template
@endsection
@section('content')
    <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center"
            style="background: url(store/img/hero-banner-alt.jpg)">
            <div class="container py-5">
                <div class="row px-4 px-lg-5">
                    <div class="col-lg-6">
                        <p class="text-muted small text-uppercase mb-2">
                            New Inspiration 2020
                        </p>
                        <h1 class="h2 text-uppercase mb-3">20% off on new season</h1>
                        <a class="btn btn-dark" href="shop.html">Browse collections</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
            <header class="text-center">
                <p class="small text-muted small text-uppercase mb-1">
                    Carefully created collections
                </p>
                <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
            </header>
            <div class="row d-flex justify-content-center">
                @forelse($kategori as $item)
                    <div class="col-lg-3 mb-5">
                        <a scope="row">{{ $loop->iteration }}</a>
                        <a class="category-item" href="{{ url('/user/kategori/' . $item->id) }}"><img class="img-fluid"
                                src="{{ asset('storage/' . $item->foto) }}" alt=""
                                style="width: 800px; height: 150px;" /><strong
                                class="category-item-title">{{ $item->namaKategori }}</strong></a>
                    </div>
                @empty
                    <div class="col-3 mb-5">
                        <h5>Kategori Tidak tersedia</h5>
                    </div>
                @endforelse
            </div>
        </section>
        <!-- TRENDING PRODUCTS-->
        <section class="py-5">
            <header>
                <p class="small text-muted small text-uppercase mb-1">
                    Made the hard way
                </p>
                <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
            </header>
            <div class="row">
                <!-- PRODUCT-->
                @forelse($data as $d)
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-offset="3" data-aos-delay="30"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <div class="product produk-data text-center">
                            <div class="position-relative mb-3">
                                <input type="hidden" class="prod-id" value="{{ $d->id }}">
                                <div class="d-flex text-white">
                                    <a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <p class="badge">adad</p>
                                </div>
                                <a class="d-block" href="{{ url('user/detail/' . $d->id) }}">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('storage/' . $d->galeri->first()->fotoProdukPertama) }}"
                                        alt="..." />
                                    {{-- {{ $d->galeri_id }} --}}
                                </a>
                                <div class="product-overlay">
                                    <ul class="mb-0 list-inline d-flex flex-column">
                                        </li>
                                        <li class="list-inline-item me-0">

                                        </li>
                                        <li class="list-inline-item m-0 p-0">
                                            <button type="button" class="btn btn-sm btn-dark addToCart">Add to
                                                cart</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h6>
                                <a class="reset-anchor" href="{{ url('user/detail/' . $d->id) }}">{{ $d->namaProduk }}</a>
                            </h6>
                            <p class="small text-muted">{{ 'Rp.' . ' ' . number_format($d->hargaProduk, 2, ',', '.') }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <h3>Data GAGAL</h3>
                    </div>
                @endforelse
            </div>
    </div>
    </section>
    <!-- SERVICES-->
    <section class="py-5 bg-light mb-5">
        <div class="container">
            <div class="row text-center gy-3">
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#delivery-time-1"></use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">Free shipping</h6>
                                <p class="text-sm mb-0 text-muted ">
                                    Free shipping worldwide
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#helpline-24h-1"></use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                                <p class="text-sm mb-0 text-muted">
                                    Free shipping worldwide
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#label-tag-1"></use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                                <p class="text-sm mb-0 text-muted">
                                    Free shipping worldwide
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
