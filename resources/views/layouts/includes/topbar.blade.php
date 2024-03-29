 <!-- Header -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
 <header class="">
     <nav class="navbar navbar-expand-lg">
         <div class="container">
             <a class="navbar-brand" href="/redirect">
                 <h2>Sixteen <em>Clothing</em></h2>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="/">Home
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/products">Our Products</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/about">About Us</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/contact">Contact Us</a>
                     </li>
                     <li class="nav-item">
                         @if (Route::has('login'))

                             @auth

                         <li class="nav-item">
                             <a class="nav-link" href="{{ url('showcart') }}">
                                 <i class='fas fa-shopping-cart'></i> Cart[{{ $count }}] </a>
                         </li>
                         {{-- <i class='fas fa-shopping-cart'></i> --}}

                         <x-app-layout>

                         </x-app-layout>
                     @else
                         <li> <a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                         @if (Route::has('register'))
                             <li> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                         @endif
                     @endauth
             </div>
             @endif
             </li>
             </ul>
         </div>
         </div>
     </nav>
 </header>
