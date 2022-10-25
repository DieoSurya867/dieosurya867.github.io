@extends('layout.store')


@section('title')
    Kategori | Ecommerce bootstrap template
     
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
          @foreach($data as $d)
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
                <div class="position-relative mb-3">
                    <div class="d-flex text-white">
                        <a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal">
                            <i class="fas fa-expand"></i>
                        </a>
                        <p class="badge">adad</p>
                    </div>
                    <a class="d-block" href="{{ url('user/detail/' . $d->id) }}"><img class="img-fluid w-100"
                            src=https://res.cloudinary.com/devarista/image/upload/v1642495971/small_mangkok_batok_kelapa_bb301b9f00.jpg?58316
                            alt="..." /></a>
                    <div class="product-overlay">
                        <ul class="mb-0 list-inline d-flex flex-column">
                            </li>
                            <li class="list-inline-item me-0">

                            </li>
                            <li class="list-inline-item m-0 p-0">
                                <a class="btn btn-sm btn-dark" href="{{ url('user/cart') }}">Add to cart</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <h6>
                    <a class="reset-anchor"
                        href="{{ url('user/detail/' . $d->id) }}">{{ $d->namaProduk }}</a>
                </h6>
                <p class="small text-muted">{{ 'Rp.' . ' ' . $d->hargaProduk }}</p>
            </div>
        </div>
          @endforeach
        </div>
      </section>

      

</div>

@endsection