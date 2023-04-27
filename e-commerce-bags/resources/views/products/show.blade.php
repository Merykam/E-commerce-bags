<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <nav class="navbar navbar-expand-md  nav-admin shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <div class="d-flex">
                    <img  width="40px" height="40px" class="brand-img" src="{{asset('images/logo3.png')}}" alt="" srcset=""> 
                    <h1 class="brand">LuxeTote</h1>
                  </div>
                   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item login">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item login">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          
      <div class="dropdown">
        <a
          class=" user-name dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="30"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
          <span class="ms-2">{{ Auth::user()->name }}</span>
          
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="{{url('/admin')}}">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{route('editProfile')}}">Edit profile</a>
          </li>
          
        </ul>
      </div>
    </div>
                            
                        @endguest
                    </ul>
                </div>
            </div>
  </nav>
        
    <div class="marginProduit">
        <div class="row gap-4">
            <div class="col img-show-container">

                <img class="img-show" src="{{ asset('images/' . $product->image) }}" alt="image">
            </div>

            <div class="col">


                <h3>{{ $product->name }}</h3>
                <h6> {{ $product->Category->name }}</h6>
                <p>{{ $product->description }}</p>
                <h6>Price : {{ $product->price }} $</h6>
                <h6>Discount price : {{ $product->discount_price }} $</h6>


                @foreach ($productcolors as $color)
                    <div class="row">
                        <h6 class="col-3 btn-color {{ $color->name }}"></h6>
                        <h6 class="col-3 ms-5">Quantity : {{ $color->pivot->quantity}}</h6>



                    </div>
                @endforeach


              





            </div>
        </div>
    </div>


</body>

</html>
