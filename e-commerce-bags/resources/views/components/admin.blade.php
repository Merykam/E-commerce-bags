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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <nav class="navbar navbar-expand-md  nav-admin shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="d-flex">
                    <img width="40px" height="40px" class="brand-img" src="{{ asset('images/logo3.png') }}"
                        alt="" srcset="">
                    <h1 class="brand">LuxeTote</h1>
                </div>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
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
                            <a class=" user-name dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                    height="30" alt="Black and White Portrait of a Man" loading="lazy" />
                                <span class="ms-2">{{ Auth::user()->name }}</span>

                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                <li>
                                    <a class="dropdown-item" href="{{ url('/admin') }}">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('editProfile') }}">Edit profile</a>
                                </li>

                            </ul>
                        </div>
                </div>

            @endguest
            </ul>
        </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="row">
        {{-- <nav id="sidebarMenu" class="collapse d-lg-block sidebar col-4 border border-2" style="position: fixed; height:100%;"> --}}
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar col-4 vh-100">
            <div class=" ">
                <div class="list-group list-group-flush">
                    <a href="#" class=" text-decoration-none text-white mt-4  py ripple" aria-current="true">
                        <i class="bi bi-speedometer2"></i><span class="ml">Dashboard</span>
                    </a>
                    <a href="#" class=" text-decoration-none text-white   py ripple" aria-current="true">
                        <i class="bi bi-bar-chart"></i><span class="ml">Statistics</span>
                    </a>

                    <a href="#" class="text-white  text-decoration-none py  ripple active">
                        <i class="bi bi-card-list"></i><span class="ml">Categories</span>
                    </a>
                    <a href="#" class="text-white  text-decoration-none py ripple"><i
                            class="bi bi-box-seam"></i><span class="ml">Products</span></a>
                    <a href="#" class="text-white text-decoration-none py ripple"><i
                            class="bi bi-cart3"></i><span class="ml">Orders</span></a>
                    <a href="#" class="text-white text-decoration-none py ripple">
                        <i class="bi bi-people"></i><span class="ml">Users</span>
                    </a>

                    <a href="#" class="text-white text-decoration-none py ripple"><i
                            class="bi bi-gear"></i><span class="ml">Settings</span></a>

                    <a class=" text-white text-decoration-none py ripple" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">

                        <i class="bi bi-box-arrow-left"></i><span class="ml">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>



        </nav>
        <!--  Sidebar -->
        <div class="p-3 col-lg-8 " style="width:80%">
            {{ $slot }}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <script src="{{ asset('script/script.js') }}"></script>

</body>

</html>
