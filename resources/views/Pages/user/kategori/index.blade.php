@extends('layout.store')


@section('title')
    Kategori
@endsection
@section('content')
    <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col d-flex justify-content-between">
                        <h1 class="h2 text-uppercase mb-0">Kategori</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5">
            <header class="text-center">
                <p class="small text-muted small text-uppercase mb-1">
                    Carefully created collections
                </p>
                <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
            </header>

            <div class="row">
                <!-- PRODUCT-->

                @foreach ($kategori as $d)
                    <div class="col-xl-3 col-lg-4 col-sm-5">
                        <div class="product produk-data text-center">
                            <div class="position-relative mb-3">
                                <input type="hidden" class="prod-id" value="{{ $d->id }}">
                                <input type="hidden" class="prod-qty" value="1">
                                <div class="d-flex text-white">
                                    <p class="badge bg-dark">adad</p>
                                    <a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </div>
                                <a class="d-block" href="{{ url('detail/' . $d->id) }}"><img class="img-fluid w-100"
                                        src="{{ asset('storage/' . $d->galeri->first()->fotoProdukPertama) }}"
                                        alt="..." /></a>
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
                                <a class="reset-anchor" href="{{ url('detail/' . $d->id) }}">{{ $d->namaProduk }}</a>
                            </h6>
                            <p class="small text-muted">{{ 'Rp.' . ' ' . number_format($d->hargaProduk, 2, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>



    </div>
@endsection
