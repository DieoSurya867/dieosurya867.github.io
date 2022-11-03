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
                    <div class="col-lg-2 mb-5" >
                        <a class="category-item" href="{{ url('/user/kategori/' . $item->id) }}"><img class="img-fluid"
                                src={{ $item->foto }} alt="" /><strong
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
                <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up"
                data-aos-offset="3"
                data-aos-delay="30"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="top-center">
                <div class="product text-center">
                            <div class="position-relative mb-3" >
                                <div class="d-flex text-white">
                                    <a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <p class="badge">adad</p>
                                </div>
                                <a class="d-block" href="{{ url('user/detail/' . $d->id) }}"><img class="img-fluid w-100"
                                        src="{{ asset('').$d->galeris->fotoProduk }}"
                                        alt="..." /></a>
                                <div class="product-overlay">
                                    <ul class="mb-0 list-inline d-flex flex-column">
                                        </li>
                                        <li class="list-inline-item me-0">

                                        </li>
                                        <li class="list-inline-item m-0 p-0">
                                            <a class="btn btn-sm btn-dark" href="{{ url('user/cart') }}">Add to
                                                cart</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h6>
                                <a class="reset-anchor" href="{{ url('user/detail/' . $d->id) }}">{{ $d->namaProduk }}</a>
                            </h6>
                            <p class="small text-muted">{{ 'Rp.' . ' ' . $d->hargaProduk }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <h3>Data GAGAL</h3>
                    </div>
                @endforelse

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
    </div>
    {{-- @foreach ($data as $d)
    <div class="modal fade" id="productView" tabindex="-1" >
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
              <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                  data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body p-0">
                  <div class="row align-items-stretch">
                          <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                                  style="background: url({{ asset('store/img/product-5.jpg)') }}"
                                  href="{{ url('user/detail/' . $d->id) }}" data-gallery="gallery1"
                                  data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                  href="{{ asset('store/img/product-5-alt-1.jpg') }}" data-gallery="gallery1"
                                  data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                  href="{{ asset('store/img/product-5-alt-2.jpg') }}" data-gallery="gallery1"
                                  data-glightbox="Red digital smartwatch"></a></div>
                          <div class="col-lg-6">
                              <div class="p-4 my-md-4">
                                  <ul class="list-inline mb-2">
                                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                      <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i>
                                      </li>
                                      <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i>
                                      </li>
                                      <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i>
                                      </li>
                                      <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i>
                                      </li>
                                  </ul>
                                  <h2 class="h4">{{ $d->namaProduk  }}</h2>
                                  <p class="text-muted">$250</p>
                                  <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut
                                      ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis
                                      parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.
                                  </p>
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
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div> --}}

@endsection
