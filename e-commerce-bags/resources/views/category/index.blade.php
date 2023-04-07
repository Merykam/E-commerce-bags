<x-admin>
    <h3 class="fw-bold h2Category">Categories</h3>
    <div class="row justify-content-around">
    @foreach($categories as $category)
        <div class="category-card card col-4 p-0" style="width: 18rem;">
            
            <img class="card-img-top object-fit-cover" src="{{asset('images/' . $category->image)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <div class="d-flex">
                <a href="#" class="btn btn-success">Edit</a>
                <form method="post" action="{{route('category.destroy',$category->id)}}">
                    @csrf 
                    @method('DELETE')

                    <button type="submit"  class="Delet ms-3 btn btn-danger" >Delete</button>

                </form>
                </div>
               
            </div>
       
      </div>
      @endforeach   
    </div>
    <div class="d-flex justify-content-center my-5">
    {!! $categories->links() !!}
    </div>
   
</x-admin>
