<x-admin>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
@csrf 

<h3 class="text-white drink text-center text-center1 bg mt-5 fw-bold">Add new product</h3>
<div class="mt-5">


  <div class="form-row row">
    <div class="form-group col-6">
      <label for="" class="fw-bold">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name">
    </div>
    <div class="form-group col-6">
      <label for="inputPassword4 fw-bold" class="fw-bold">Category</label>
      
      <select id="inputState" class="form-control" name="category_id">
        <option selected>Choose category...</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    
    </div>
  </div>
  <div class="overflow-scroll">


    <div class="row modal-body">
    <div class="form-group col-6 ">
        <!-- <p for="inputAddress" class="fw-bold m-0">Color</p>
        <select name="colors[]" class="js-example-responsive" multiple="multiple" style="width: 100%">
            <option disabled>Choose colors...</option>
                @foreach($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
        </select> -->
        <!-- <label for=" " class="fw-bold">Color</label>
        <select name="colors[]" class="" class="form-control" id="inputState"  >
            <option disabled>Choose colors...</option>
                @foreach($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
        </select>  -->
        <label for="inputState" class="fw-bold">Color</label>
          <select name="colors[]"  id="inputState" class="form-control" name="in_stock">
              @foreach($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
          
          </select>
        
      
      </div>
      <div class="form-group col-6">
        <label for="inputAddress2 " class="fw-bold">quantity</label>
        <input name="quantity[]" type="text" class="form-control" id="inputAddress2" placeholder="Bug quantity">
      </div>

    </div>

    <div class="row another-modal-body">

    </div>
    <button class="Add" type="button">Add</button>

 </div>


  <div class="form-row row">
  <div class="form-group col-6">
    <label for="inputAddress2 " class="fw-bold">Price</label>
    <input name="price" type="number" class="form-control" id="inputAddress2" placeholder="Bug price">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity " class="fw-bold">Discount price</label>
      <input name="discount_price" type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col">
      <label for="inputCity " class="fw-bold">Image</label>
      <input name="image" type="file" class="form-control" id="inputCity" accept="image/*">
    </div>
    <div class="form-group col">
      <label for="inputState" class="fw-bold">In stock</label>
      <select id="inputState" class="form-control" name="in_stock">
        <option selected>Choose...</option>
        <option>0</option>
        <option>1</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1" class="fw-bold">Description</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   
  </div>

 
  </div>
  <button type="submit" class="btn btn-dark mt-4">Save</button>
  </div>
</form>

</x-admin>