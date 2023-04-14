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
    <form method="post" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h3 class="text-white drink text-center text-center1 bg mt-5 fw-bold">Edit product</h3>
        <div class="mt-5">


            <div class="form-row row">
                <div class="form-group col-6">
                    <label for="" class="fw-bold">Name</label>
                    <input value="{{ $product->name }}" type="text" class="form-control" id="inputEmail4"
                        placeholder="Name" name="name">
                </div>
                <div class="form-group col-6">
                    <label for="inputPassword4 fw-bold" class="fw-bold">Category</label>

                    <select id="inputState" class="form-control" name="category_id">

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="overflow-scroll">
              

                {{-- dd($product->colors) --}}
                @foreach($product->colors as $key => $colorsP)
               
          
                <div class="row modal-body">
                    <div class="form-group col-6 ">
                        <label for="inputState" class="fw-bold">Color</label>
                        <select name="colors[]" id="inputState" class="form-control" name="in_stock">
                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}" {{ $color->id== $colorsP->id ? 'selected' : '' }}>{{ $color->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="inputAddress2 " class="fw-bold">quantity</label>
                        <input value="{{$colorsP->pivot->quantity}}" name="quantity[]" type="text" class="form-control" id="inputAddress2"
                            placeholder="Bug quantity">
                    </div>

                </div>
                @endforeach
                


            </div>

            <div class="row another-modal-body">

            </div>
            <button class="Add" type="button">Add</button>

        </div>


        <div class="form-row row">
            <div class="form-group col-6">
                <label for="inputAddress2 " class="fw-bold">Price</label>
                <input value="{{ $product->price }}" name="price" type="number" class="form-control"
                    id="inputAddress2" placeholder="Bug price">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity " class="fw-bold">Discount price</label>
                <input value="{{ $product->discount_price }}" name="discount_price" type="text" class="form-control"
                    id="inputCity">
            </div>
            <div class="form-group col">
                <label for="inputCity " class="fw-bold">Image</label>
                <input name="image" type="file" class="form-control" id="inputCity" accept="image/*">
            </div>
            <div class="form-group col">
                <label for="inputState" class="fw-bold">In stock</label>
                <select id="inputState" class="form-control" name="in_stock">
                    <option value="0" {{$product->in_stock == 0 ? 'selected' : ''}}>0</option>
                    <option value="1" {{$product->in_stock == 1 ? 'selected': ''}}>1</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="fw-bold">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $product->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-dark mt-4">Save</button>

        </div>

        </div>

    </form>

</x-admin>
