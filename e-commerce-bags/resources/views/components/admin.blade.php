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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <nav class="navbar navbar-expand-md  bg-white shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img class="brand" src="{{asset('images/MK.png')}}" alt="" srcset="">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class=" dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
  </nav>
        
 <!-- Sidebar -->
 <div class="d-flex">
      <nav id="sidebarMenu" class="collapse d-lg-block sidebar vh-100 ">
          <div class="position-sticky ">
            <div class="list-group list-group-flush">
              <a
                href="#"
                class=" text-decoration-none text-white mt-4  py ripple"
                aria-current="true"
              
              >
              <i class="bi bi-speedometer2"></i><span class="ml">Dashboard</span>
              </a>
              <a
                href="#"
                class=" text-decoration-none text-white   py ripple"
                aria-current="true"
              
              >
              <i class="bi bi-bar-chart"></i><span class="ml">Statistics</span>
              </a>
              
              <a href="#" class="text-white  text-decoration-none py  ripple active">
              <i class="bi bi-card-list"></i><span class="ml">Categories</span>
              </a>
              <a href="#" class="text-white  text-decoration-none py ripple"
                ><i class="bi bi-box-seam"></i><span class="ml">Products</span></a
              >
              <a href="#" class="text-white text-decoration-none py ripple"
                ><i class="bi bi-cart3"></i><span class="ml">Orders</span></a
              >
              <a href="#" class="text-white text-decoration-none py ripple">
              <i class="bi bi-people"></i><span class="ml">Users</span>
              </a>
            
              <a href="#" class="text-white text-decoration-none py ripple"
                ><i class="bi bi-gear"></i><span class="ml">Settings</span></a
              >
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              Logout
              @csrf
            </form>
              <a href="{{ route('logout') }}" class="text-white text-decoration-none py ripple"
                ><i class="bi bi-box-arrow-left"></i><span class="ml">Logout</span></a
              >
            
            </div>
          </div>
          


      </nav>
      <!--  Sidebar -->
      <div class="p-3 w-100">
        {{$slot}}
      </div>
</div>
</body>
</html>