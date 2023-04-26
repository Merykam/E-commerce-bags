<!DOCTYPE html>
<html>
<head>
	<title>Checkout Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

		<div class="col-md-4 container bg-default">
            
			<h4  class="my-4">
					Billing Address
			</h4>
           
         
          
			
			<form method="post" action="{{route('store')}}">
                @csrf
				<div class="form-row">
					<div class="col form-group">
						<label for="firstname">Name</label>
						<input name="name" type="text" class="form-control" id="firstname" placeholder="First Name">
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>

				
				</div>

				<div class="form-group">
						<label for="email">Email</label>
						<input name="email" type="email" class="form-control" id="email" placeholder="you@example.com" required>
				</div>

				<div class="form-group">
					<label for="adress">Address</label>
					<input name="address" type="text" class="form-control" id="adress" placeholder="1234 Main Street" required>
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
				</div>

				

				<div class="row">
					

					<div class="col form-group">
						<label for="city">City</label>
						<input name="city" type="text" class="form-control" id="adress" placeholder="1234 Main Street" required>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
						
			
				</div>

                
				<div class="row">
					

					<div class="col form-group">
						<label for="city">Phone number</label>
						<input name="phone_number" type="text" class="form-control" id="adress" placeholder="+212" required>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
						
			
				</div>

                <div class="row">
					

					<div class="col form-group">
						{{-- <label for="city">Total price</label> --}}
						<input value="{{session()->get('total')}}" name="total_price" type="hidden" class="form-control" id="adress" placeholder="+212" required>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>

                    
					<div class="col form-group">
						{{-- <label for="city">Total price</label> --}}
						<input value="{{ json_encode(session('cart')) }}" name="cart" type="hidden" class="form-control" id="adress" placeholder="+212" required>
						<div class="invalid-feedback">
							Please provide a valid city
						</div>
					</div>
						
			
				</div>

				<hr>
				
	

				

					<hr class="mb-4">
				
					<button class="btn btn-primary bt-lg btn-block" type="submit">Checkout</button>
			</form>
		</div>
</body>
</html>
