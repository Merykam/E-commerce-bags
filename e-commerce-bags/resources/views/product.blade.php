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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar background">
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
            <button class="sign">Sign up</button>
            <button class="sign">Sign in</button>
            <i class="bi bi-cart"></i>


        </div>






    </nav>

    <section class="product">

        <img class="product-img" src="{{asset('images/' . $product->image)}}" alt="">
        <div class="product-details">
            <h1 class="product-title">{{$product->name}}</h1>
            <p class="product-des">{{$product->description}}</p>
            <p class="price">$ {{$product->price}}</p>

            <div class="btn-container">
                <button class="product-btn buy-btn">Buy now</button>
                <button class="product-btn cart-btn">Add to cart</button>


            </div>
        </div>


    </section>

        
</body>
</html>