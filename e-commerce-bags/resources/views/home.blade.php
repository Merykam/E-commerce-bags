<x-admin>
<main>

<div class="cards d-flex justify-content-between">

    <div class="card " >
    <div class="card-body  d-flex justify-content-center aligh-items-center flex-column">
        <div class="d-flex justify-content-between">
        <h5>Earnings</h5>
        <i class="bi bi-speedometer2 w3-xlarge i0" id="earn"></i> 
        </div>
       
        <h1 class="Earnings">550 $</h1>
     
        </div>
    </div>

    <div class="card " >
        <div class="card-body  d-flex justify-content-center aligh-items-center flex-column">
            <div class="d-flex justify-content-between">
            <h5>Earnings</h5>
            <i class="bi bi-speedometer2 w3-xlarge i0" id="earn"></i> 
            </div>
           
            <h1 class="Earnings">550 $</h1>
         
            </div>
    </div>

    <div class="card " >
        <div class="card-body  d-flex justify-content-center aligh-items-center flex-column">
            <div class="d-flex justify-content-between">
            <h5>Earnings</h5>
            <i class="bi bi-speedometer2 w3-xlarge i0" id="earn"></i> 
            </div>
           
            <h1 class="Earnings">550 $</h1>
         
            </div>
        </div>

    

    
 
{{-- <div class="card " >

<div class="card-body  d-flex justify-content-center aligh-items-center flex-column">
    <div class="d-flex justify-content-between">
    <h5>Earnings</h5>
    <i class="bi bi-speedometer2 w3-xlarge i0" id="earn"></i>
    </div>
   
    <h1 class="Earnings">550 $</h1>
 
</div>

</div>

<div class="card">

<div class="card-body d-flex justify-content-center aligh-items-center flex-column">
    <div class="d-flex justify-content-between ">
        <h5>Users</h5>
    <i class="bi bi-people w3-xlarge i1"></i>
    </div>

  <h1 class="users">15</h1>

</div>

</div>

<div class="card">

<div class="card-body d-flex justify-content-center aligh-items-center flex-column">
<div class="d-flex justify-content-between ">
        <h5>Products</h5>
    <i class="bi bi-box-seam w3-xlarge i2"></i>
    </div>
    <h1 class="Products">15</h1>

</div>

</div>

<div class="card">

<div class="card-body d-flex justify-content-center aligh-items-center flex-column">
<div class="d-flex justify-content-between ">
        <h5>Sales</h5>
        <i class="bi bi-receipt w3-xlarge i3"></i>
    
    </div>
  <h1 class="Sales">100</h1>
 
</div>

</div> --}}

</div>
</main>


<table id="example" class="table table-striped mt-5" style="width:100%">
        <thead>
            <tr class="head">
                <th>Product name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Discount price</th>
                <th>status</th>
                <th>Image</th>
                <th>Action</th>
               
                
            </tr>
        </thead>
        @foreach($products as $product)
        <tbody>
            <tr class="bg-white">
             
                <td>{{$product->name}}</td>
                <td>{{$product->Category->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_price}}</td>
                <td>{{$product->in_stock}}</td>
                <td> <img class="img-product" src="{{asset('images/' . $product->image)}}" alt="image"></td>
                <td class="d-flex justify-content-center ">
                 
                    <a  class="btn btn-eye d-flex align-items-center" href="{{route('products.show', [$product->id])}}"><i class="bi-eye"></i></a>
                    <a  class="btn btn-update ms-2" href="{{route('products.edit', [$product->id])}}" ><i class="bi bi-pencil-square"></i></a>
                    <form method="post" action="{{route('products.destroy',[$product->id])}}">
                        @csrf 
                        @method('DELETE')
    
                        <button type="submit"  class="btn btn-danger ms-2" ><i class="bi bi-archive"></i></button>
    
                    </form>

                </td>
              


            
            </tr>
            
        </tbody>
        @endforeach
</table>



</x-admin>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});

</script>
