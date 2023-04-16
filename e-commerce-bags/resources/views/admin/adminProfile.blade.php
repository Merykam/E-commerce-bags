<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
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
</head>
<body>
    <nav class="navbar navbar-expand-md  nav-admin shadow-sm ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
              <div class="d-flex">
                <img  width="40px" height="40px" class="brand-img" src="{{asset('images/green.png')}}" alt="" srcset=""> 
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
        <a class="dropdown-item" href="#">My profile</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">Settings</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">Logout</a>
      </li>
    </ul>
  </div>
</div>
                        
                    @endguest
                </ul>
            </div>
        </div>
</nav>




<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container admincard py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card admincard mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5>{{ auth()->user()->name }}</h5>
                <p>Admin</p>
               
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <div class="row">
                    <h6 class="col">Information</h6>
                    <div class="col d-flex justify-content-end">
                      <a href="{{route('editProfile')}}"><i style="color :green;" class=" bi bi-pencil-square"></i></a>
                    </div>
                    
                  </div>
                 
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Name</h6>
                      <p class="text-muted">{{ auth()->user()->name }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{ auth()->user()->email }}</p>
                    </div>
                  </div>
                 
               
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Role</h6>
                      <p class="text-muted">Admin</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Phone number</h6>
                      <p class="text-muted">+212602846507</p>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
</body>
</html>