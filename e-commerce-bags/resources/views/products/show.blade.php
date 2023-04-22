<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-md  bg-white shadow-sm ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- <img class="brand" src="{{ asset('images/MK.png') }}" alt="" srcset=""> -->
                <h1 class="brand"><span>M</span>k <span>B</span>ags</h1>
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

    <div class="marginProduit">
        <div class="row ">
            <div class="col">

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
                        <h6 class="col-3 ms-5">Quantity : {{ $color->pivot->quantity }}</h6>



                    </div>
                @endforeach


                <div class="d-flex justify-content-end p-5">
                    <a href="" class=" action-product text-success fw-bold"><i
                            class="bi bi-pencil-square"></i></a>
                    <a href="" class=" action-product text-danger fw-bold ms-2"><i class="bi bi-archive"></i></a>

                </div>






            </div>
        </div>
    </div>


</body>

</html>
