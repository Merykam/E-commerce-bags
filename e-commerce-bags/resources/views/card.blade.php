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
    <nav class="navbar navbar-expand-md  nav-admin shadow-sm ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="d-flex">
                    <img width="40px" height="40px" class="brand-img" src="{{ asset('images/green.png') }}"
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
{{-- 
    <section class="vh-100" style="background-color: #fdccbc;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <p><span class="h2">Shopping Cart </span><span class="h4">(1 item in your cart)</span></p>

                    <div class="card mb-4">
                        <div class="card-body p-4">



                           

                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                                        class="img-fluid" alt="Generic placeholder image">
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Name</p>
                                        <p class="lead fw-normal mb-0">
                                            @if (session()->has('product_name'))
                                                <!-- Display the product name -->
                                                {{ session('product_name') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Color</p>
                                        <p class="lead fw-normal mb-0">
                                            @if (session()->has('selected-color'))
                                                <!-- Display the selected color -->
                                                {{ session('selected-color') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Quantity</p>
                                        <p class="lead fw-normal mb-0">
                                            @if (session()->has('selected-quantity'))
                                                <!-- Display the selected quantity -->
                                                {{ session('selected-quantity') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Price</p>
                                        <p class="lead fw-normal mb-0">
                                            @if (session()->has('price'))
                                                <!-- Display the price -->
                                                {{ session('price') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Total</p>
                                        <p class="lead fw-normal mb-0">$0</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="card-body p-4">

                            <div class="float-end">
                                <p class="mb-0 me-5 d-flex align-items-center">
                                    <span class="small text-muted me-2">Order total:</span> <span
                                        class="lead fw-normal">$799</span>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
                        <button type="button" class="btn btn-primary btn-lg">Add to cart</button>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

<div class="m-5">


    @if(count($cart) > 0)
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Color</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
                <tr>
                    <td>{{ $item['product_name'] }}</td>
                    <td>{{ $item['selected_color'] }}</td>
                    <td>{{ $item['selected_quantity'] }}</td>
                    <td>{{ $item['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No items in the cart</p>
@endif





</div>  
</body>

</html>
