@extends('layout.store')


@section('title')
    Detail Produk
@endsection
@section('content')
    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0">
                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                                style="background: url({{ asset('store/img/product-5.jpg)') }}"
                                href="{{ asset('store/img/img/product-5.jpg)') }}" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                href="{{ asset('store/img/product-5-alt-1.jpg') }}" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                href="{{ asset('store/img/product-5-alt-2.jpg') }}" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a></div>
                        <div class="col-lg-6">
                            <div class="p-4 my-md-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                                </ul>
                                <h2 class="h4">Red digital smartwatch</h2>
                                <p class="text-muted">$250</p>
                                <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut
                                    ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis
                                    parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                                <div class="row align-items-stretch mb-4 gx-0">
                                    <div class="col-sm-7">
                                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                                            <span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                <input class="form-control border-0 shadow-0 p-0" type="text"
                                                    value="1">
                                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5"><a
                                            class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                                            href="{{ url('user/cart') }}">Add to cart</a></div>
                                </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                                        class="far fa-heart me-2"></i>Add to wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <!-- PRODUCT SLIDER-->
                    <div class="row m-sm-0">
                        @foreach ($d as $d)
                            <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                                <div class="swiper product-slider-thumbs">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100"
                                                src="{{ asset('storage/' . $d->galeri->first()->fotoProdukPertama) }}"
                                                alt="..."></div>
                                        <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100"
                                                src="{{ asset('storage/' . $d->galeri->first()->fotoProdukKedua) }}"
                                                alt="..."></div>
                                        <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100"
                                                src="{{ asset('storage/' . $d->galeri->first()->fotoProdukKetiga) }}"
                                                alt="..."></div>
                                        <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100"
                                                src="{{ asset('storage/' . $d->galeri->first()->fotoProdukKeempat) }}"
                                                alt="..."></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 order-1 order-sm-2">
                                <div class="swiper product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide h-auto"><a class="glightbox product-view"
                                                href="{{ asset('store/img/product-detail-1.jpg') }}" data-gallery="gallery2"
                                                data-glightbox="Product item 1"><img class="img-fluid"
                                                    src="{{ asset('storage/' . $d->galeri->first()->fotoProdukPertama) }}"
                                                    alt="..."></a>
                                        </div>
                                        <div class="swiper-slide h-auto"><a class="glightbox product-view"
                                                href="{{ asset('store/img/product-detail-1.jpg') }}"
                                                data-gallery="gallery2" data-glightbox="Product item 2"><img
                                                    class="img-fluid"
                                                    src="{{ asset('storage/' . $d->galeri->first()->fotoProdukKedua) }}"
                                                    alt="..."></a>
                                        </div>
                                        <div class="swiper-slide h-auto"><a class="glightbox product-view"
                                                href="{{ asset('store/img/product-detail-4.jpg') }}"
                                                data-gallery="gallery2" data-glightbox="Product item 3"><img
                                                    class="img-fluid"
                                                    src="{{ asset('storage/' . $d->galeri->first()->fotoProdukKetiga) }}"
                                                    alt="..."></a></div>
                                        <div class="swiper-slide h-auto"><a class="glightbox product-view"
                                                href="{{ asset('store/img/product-detail-4.jpg') }}"
                                                data-gallery="gallery2" data-glightbox="Product item 4"><img
                                                    class="img-fluid"
                                                    src="{{ asset('storage/' . $d->galeri->first()->fotoProdukKeempat) }}"
                                                    alt="..."></a></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- PRODUCT DETAILS-->
                <div class="col-lg-6 produk-data">
                    <ul class="list-inline mb-2 text-sm">
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <input type="hidden" class="prod-id" value="{{ $d->id }}">
                    <h1>{{ $d->namaProduk }}</h1>
                    <p class="text-muted lead">{{ 'Rp.' . ' ' . number_format($d->hargaProduk, 2, ',', '.') }}</p>

                    <div class="row align-items-stretch mb-4">
                        <div class="col-sm-5 pr-sm-0">
                            <div
                                class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                                <span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                <div class="quantity">
                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                    <input class="form-control border-0 shadow-0 p-0 prod-qty" type="text"
                                        value="1">
                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 pl-sm-0">
                            @auth
                                <button type="button" class="btn btn-sm btn-dark addToCart">Add to
                                    cart</button>
                            @else
                                <a href="{{ url('login') }}" class="btn btn-sm btn-dark">Login First</a>
                            @endauth
                            <ul class="list-unstyled small d-inline-block mt-5">
                                <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">Stok:</strong><span
                                        class="ms-2 text-muted">{{ $d->stock }}</span></li>
                                <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                        class="text-uppercase text-dark">Kategori:</strong><a class="reset-anchor ms-2"
                                        href="{{ url('/user/kategori/' . $d->kategori_id) }}">{{ $d->kategori->namaKategori }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- DETAILS TABS-->
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab"
                                data-bs-toggle="tab" href="#description" role="tab" aria-controls="description"
                                aria-selected="true">Description</a></li>

                    </ul>
                    <div class="tab-content mb-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="p-4 p-lg-5 mx-auto bg-white card border-0">
                                <h5>Deskripsi Produk</h5>
                                <p class="text-muted text-sm mb-0">{{ $d->deskripsi }}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>
    </section>
@endsection
