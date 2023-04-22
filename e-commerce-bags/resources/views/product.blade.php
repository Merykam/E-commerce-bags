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
        <script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
    


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
        <div class="img-container">

            <img class="product-img" src="{{ asset('images/' . $product->image) }}" alt="">

        </div>


        <div class="product-details">
            <form action="{{ route('addToCart', $product->id) }}" method="post">
                @csrf


                <h1 class="product-title">{{ $product->name }}</h1>
                <p class="product-des">{{ $product->description }}</p>
                <p class="price">$ {{ $product->price }}</p>




                <div class="color-quantity">
                    @foreach ($productcolors as $color)
                        <div class="flex-column" style="margin:4px">
                            <input name="color" type="radio" id="color-{{ $color->name }}"
                                class="btn-color {{ $color->name }}" value="{{ $color->name }}">
                            <input id="quantity-{{ $color->name }}" style="width: 40px;" name="quantity"
                                type="number" min="1" max="{{ $color->pivot->quantity }}">

                        </div>
                    @endforeach

                    <input type="hidden" name="selected-color" id="selected-color" value="">
                    <input type="hidden" name="selected-quantity" id="selected-quantity" value="">

                </div>


                <div class="btn-container">
                    <button class="product-btn buy-btn">Buy now</button>
                    <button type="submit" class="product-btn cart-btn">Add to cart</button>


                </div>

            </form>
        </div>


    </section>

    <script>
        // const colorInputs = document.querySelectorAll('input[name="color"]');

        // colorInputs.forEach(input => {


        //     input.addEventListener('change', function() {
        //         const quantityInput = document.querySelector(`#quantity-${input.value}`);
        //         if (input.checked) {

        //             quantityInput.removeAttribute('disabled');
        //         } else {
        //             quantityInput.setAttribute('disabled', 'disabled');
        //         }
        //     });
        // });

        $(document).ready(function() {
            // add event listener to radio buttons
            $('input[name="color"]').change(function() {
                // get the value of the selected radio button
                
                var color = $('input[name="color"]:checked').val();
                

                // get the value of the corresponding quantity input
                var quantity = $('#quantity-' + color).val();

                // set the values of the hidden inputs
                $('#selected-color').val(color);
                $('#selected-quantity').val(quantity);

                const colo =  document.getElementById('selected-color').value;
                console.log(colo);
                const quant =  document.getElementById('selected-quantity').value;
        
                console.log(quant);

            });
        });
        
   

    </script>
</body>

</html>
