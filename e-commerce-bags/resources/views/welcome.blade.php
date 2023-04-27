<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome page</title>
    <link rel="stylesheet" href="{{ asset('styles/styleWelcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
  


</head>

<body>

    <nav class="navbar bg">
        <div class="brand-container">
            <h1 class="brand">LuxeTote</h1>

        </div>




        <ul class="links-container">
            <li class="link-item"><a href="" class="link active">Home</a></li>

            <li class="link-item"><a href="" class="link">Product</a></li>

            <li class="link-item"><a href="" class="link">About</a></li>

            <li class="link-item"><a href="" class="link">Contact</a></li>


        </ul>

        <div class="authentifiaction">

          @guest
          @if (Route::has('login'))
              <li class="nav-item login ">
                  <a class="nav-link welclogin " href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item login ms-3 text-white">
                  <a class="nav-link welclogin" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else

              
<div class="dropdown">
  <button class="dropbtn"><span class="ms-2">{{ Auth::user()->name }}</span></button>
  <div class="dropdown-content">
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


          
            {{-- <button>Sign up</button>
            <button>Sign in</button> --}}
            <div class="count-container">
              <a href="{{route('card')}}">
                              <i class="bi bi-cart">                
              </i>
              </a>

              @if (!session('cart'))
              <span class="count2">0</span>
              @else
              <span class="count2">{{count(session('cart'))}}</span>
              @endif
             

            </div>


        </div>




        @endguest

    </nav>


    <header class="header-section">

        <h1 class="header-heading"><span>luxury</span> bags</h1>
    </header>

    <section class="product-section">
        <div class="flex-title">
          <h1 class="section-title">Our products</h1>

        </div>
        
        <div class="product-container">

          @foreach($products as $product)
            <div class="product-card">
                <img src="{{asset('images/' . $product->image)}} " alt="">
                <div class="intro">
                  <div class="intro-column">
                    <div class="name">
                      <h1>{{$product->name}}</h1>
                    </div>
                   
                    <div class="details">
                      <div class="category">
                        <h6>{{$product->Category->name}}</h6>

                      </div>
                     <div class="price">
                      <p>$ {{$product->price}} </p>
                     </div>
                      <div class="btn-details">
                        <a style="width: 90px; height:40px" class="more-detail" href="{{route('item', [$product->id])}}">More details</a>

                      </div>
                   
                  

                  </div>
                 
                    

                  </div>
                  

                </div>

            </div>

            @endforeach

          



        </div>

    </section>

    <section class="image-mid-section">
      <div class="image-collage">
        <div class="image-collection">
          <img class="imgCollection" src="{{asset('images/BLAK.PNG')}}" alt="">
          <img class="imgCollection" src="{{asset('images/CARAMEL1.PNG')}}" alt="">
          <img class="imgCollection" src="{{asset('images/CARAMELM.PNG')}}" alt="">
          <img src="{{asset('images/modelcaramel.PNG')}}" alt="">
          <img src="{{asset('images/caramodel.PNG')}}" alt="">

        </div>

      </div>

    </section>


    <footer>
      <div class="footer-content">
          <h3>LuxeTote </h3>
          <p>Raj Template is a blog website where you will find great tutorials on web design and development. Here each tutorial is beautifully described step by step with the required source code.</p>
          <ul class="socials">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
      </div>
      <div class="footer-bottom">
          <p>copyright &copy; <a href="#">LuxeTote</a>  </p>
                  <div class="footer-menu">
                    <ul class="f-menu">
                      <li><a href="">Home</a></li>
                      <li><a href="">About</a></li>
                      <li><a href="">Contact</a></li>
                      <li><a href="">Blog</a></li>
                    </ul>
                  </div>
      </div>
</footer>

    <script src="{{ asset('script/welcome.js') }}"></script>

</body>

</html>