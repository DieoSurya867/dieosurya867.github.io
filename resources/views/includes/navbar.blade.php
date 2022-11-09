 <!-- navbar-->
 <header class="header bg-white">
     <div class="container px-lg-3">
         <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
             <a class="navbar-brand" href="{{ url('/') }}">
                 <h3 class="fw-bold text-uppercase text-dark">O-Mal</h3>
             </a>
             <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto">
                     <li class="nav-item">
                         <!-- Link--><a class="nav-link active" href="/">Home</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">Kategori</a>
                         <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                             <a class="dropdown-item border-0 transition-link"
                                 href="{{ url('/kategori/1') }}">Makanan</a><a
                                 class="dropdown-item border-0 transition-link"
                                 href="{{ url('/kategori/2') }}">Minuman</a><a
                                 class="dropdown-item border-0 transition-link"
                                 href="{{ url('/kategori/3') }}">Pakaian</a><a
                                 class="dropdown-item border-0 transition-link"
                                 href="{{ url('/kategori/4') }}">Souvenir</a>
                         </div>
                     </li>
                 </ul>
                 <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('/keranjang') }}">
                             <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small
                                 class="text-gray fw-normal">(2)</small></a>
                     </li>
                     @guest
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">
                                 <i class="fas fa-user me-1 text-gray fw-normal"></i>{{ __('Login') }}</a>
                         </li>
                         @if (Route::has('register'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">
                                     <i class="fas fa-user me-1 text-gray fw-normal"></i>{{ __('Register') }}</a>
                             </li>
                         @endif
                     @else
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                             <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                                 <a class="dropdown-item border-0 transition-link" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}</a>
                             </div>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                 </div>
             @endguest
             </ul>
     </div>
     </nav>
     </div>
 </header>
