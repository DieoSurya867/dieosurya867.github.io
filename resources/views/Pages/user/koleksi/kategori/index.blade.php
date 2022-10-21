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
        
        <div class="row d-flex justify-content-center">
            <div class="col-lg-2">
                <a class="category-item" href="shop.html"
                  ><img class="img-fluid" src={{ asset ("store/img/cat-img-1.jpg")}} alt="" /><strong
                    class="category-item-title"
                    >all</strong></a>
              </div>
            @forelse($kategori as $item)
                
            <div class="col-lg-2 mb-5">
                <a class="category-item" href="{{ url('/user/kategori/'.$item->namaKategori) }}"
                ><img class="img-fluid" src={{ $item->foto }} alt="" /><strong
                class="category-item-title"
                >{{ $item->namaKategori }}</strong></a>
            </div>
            @empty
                <div class="col-3 mb-5">
                    <h5>Kategori Tidak tersedia</h5>
                </div>
            @endforelse
        </div>
      </section>

</div>

@endsection