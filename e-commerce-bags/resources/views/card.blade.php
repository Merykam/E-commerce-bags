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
    {{-- <link rel="stylesheet" href="{{ asset('styles/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('styles/styleWelcome.css') }}">
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
                    {{-- <img width="40px" height="40px" class="brand-img" src="{{ asset('images/green.png') }}"
                        alt="" srcset=""> --}}
                    <h1 class="brand">LuxeTote</h1>
                </div>

            </a>
            <ul class="links-container">
                <li class="link-item"><a href="" class="link active text-black">Home</a></li>
    
                <li class="link-item"><a href="" class="link text-black">Product</a></li>
    
                <li class="link-item"><a href="" class="link text-black">About</a></li>
    
                <li class="link-item"><a href="" class="link text-black">Contact</a></li>
    
    
            </ul>
    
            <div class="authentifiaction">
                <button class="sign text-black">Sign up</button>
                <button class="sign text-black">Sign in</button>
                <i class="bi bi-cart"></i>
                {{count($cart)}}
    
    
            </div>
          
        </div>
      
    </nav>

    <section class="vh-100" style="">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center mt-5">
                <div class="col" {{$total=0}}>
                   
                    @foreach ($cart as $index => $item)
                    <div class="card mb-4 shadow">
                        {{-- @if (count($cart) > 0) --}}

                            
                                <div class="card-body p-4">





                                    <div class="row align-items-center">

                                        <div class="col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class="small text-muted mb-4 pb-2">Name</p>
                                                <p class="lead fw-normal mb-0">
                                                    {{ $item['product_name'] }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class="small text-muted mb-4 pb-2">Color</p>
                                                <p class="lead fw-normal mb-0">
                                                    {{ $item['selected_color'] }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class="small text-muted mb-4 pb-2">Price</p>
                                                <p class="lead fw-normal mb-0">
                                                    $ {{ $item['price'] }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class="small text-muted mb-4 pb-2">Quantity</p>
                                                <p class="lead fw-normal mb-0">
                                                <form action="{{ route('cart.update', $index) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <input class="col" style="width:50px" type="number"
                                                            name="quantity" value="{{ $item['selected_quantity'] }}"
                                                            min="1">
                                                        <button type="submit"  class="col btn btn-success ms-2" ><i class="bi bi-pencil-square"></i></button>

                                                    </div>

                                                </form>
                                                </p>
                                            </div>
                                        </div>


                    
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Total</p>
                                    <p class="lead fw-normal mb-0"{{ $total += $item['selected_quantity'] * $item['price'] }}>$ {{ $item['selected_quantity'] * $item['price'] }}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>

                                    <p class="lead fw-normal mb-0">
                                    <form action="{{ route('cart.delete', $index) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-danger ms-2" ><i class="bi bi-archive"></i></button>
                                    </form>
                                    </p>
                                </div>
                            </div>

                    </div>

                </div>
            {{-- @else
                <p>No items in the cart</p>
                @endif --}}
            </div>
            @endforeach
            <div class="card mb-5">
                <div class="card-body p-4">

                    <div class="float-end">
                        <p class="mb-0 me-5 d-flex align-items-center">
                            <span class="small text-muted me-2">Order total:</span> <span
                                class="lead fw-normal">${{$total}}</span>
                        </p>
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{route('checkout')}}" type="button" class="btn btn-light btn-lg me-2">Continue shopping</a>
                
            </div>

        </div>
        </div>
        </div>
    </section>


    {{-- 
    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                            <h6 class="mb-0 text-muted">3 items</h6>
                                        </div>




                                        <hr class="my-4">
                                        @foreach ($cart as $index => $item)
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img6.webp"
                                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">{{ $item['product_name'] }}</h6>
                                                    {{-- <h6 class="text-black mb-0">Cotton T-shirt</h6> --}}
    {{-- </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">

                                                    </button> --}}

    {{-- <input value="{{ $item['selected_quantity'] }}" id="" style="width: 40px;" name="quantity" type="number"
                                min="1" max="5"> --}}

    {{-- 
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">{{ $item['selected_color'] }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">$ {{ $item['price'] }}</h6>
                                                </div>

                                            </div>

                                            <form action="{{ route('cart.delete', $index) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                            <form action="{{ route('cart.update', $index) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="number" name="quantity"
                                                    value="{{ $item['selected_quantity'] }}" min="1">
                                                <button type="submit">Update</button>
                                            </form>
                                        @endforeach


                                        <hr class="my-4">





                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="#!" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">items 3</h5>
                                            <h5>€ 132.00</h5>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Shipping</h5>

                                        <div class="mb-4 pb-2">
                                            <select class="select">
                                                <option value="1">Standard-Delivery- €5.00</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Give code</h5>

                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>€ 137.00</h5>
                                        </div>

                                        <button type="button" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Register</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}} 
</body>

</html>
