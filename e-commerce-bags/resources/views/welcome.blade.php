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

    <nav class="navbar">
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
            <button>Sign up</button>
            <button>Sign in</button>
            <i class="bi bi-cart"></i>


        </div>






    </nav>


    <header class="header-section">

        <h1 class="header-heading"><span>luxury</span> bags</h1>
    </header>

    <section class="product-section">
        <div class="flex-title">
          <h1 class="section-title">Our products</h1>

        </div>
        
        <div class="product-container">
            <div class="product-card">
                <img src="{{ asset('images/gg.jpg') }}" alt="">
                <div class="intro">
                  <h1>Bag</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

                </div>

            </div>
            <div class="product-card">
              <img src="{{ asset('images/gg.jpg') }}" alt="">
              <div class="intro">
                <h1>Bag</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>

            </div>
            <div class="product-card">
              <img src="{{ asset('images/gg.jpg') }}" alt="">
              <div class="intro">
                <h1>Bag</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

              </div>

            </div>



        </div>

    </section>

    <section class="image-mid-section">
      <div class="image-collage">
        <div class="image-collection">
          <img src="{{asset('images/3.jpeg')}}" alt="">
          <img src="{{asset('images/1.jpeg')}}" alt="">
          <img src="{{asset('images/2.jpeg')}}" alt="">

        </div>

      </div>

    </section>



</body>

</html>
