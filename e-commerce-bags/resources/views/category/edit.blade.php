<x-admin>


<div class="form-create">






<form action="{{route('category.update',$category->id)}}"  method="post" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <h3 class="text-white drink text-center text-center1 bg-dark mt-5 fw-bold">Edit category</h3>
<div class="form-row mt-3">


<div class="col mb-0">
    <label class="form-label fw-bold">Catrgory name</label>
    <input value="{{ $category->name }}" type="text" class="form-control"  name="name" />
</div>

<div class="m-0 text-danger">
  @error('name')
  {{$message}}

  @enderror

</div>
  

<div class="col  mb-0">
  <label class="form-label fw-bold">Image</label>
  <input value="" type="file" class="form-control fw-bold" id="task-title" name="image" accept="image/*"/>
  <img src="/images/{{ $category->image }}" width="300px">
</div>
<div class="m-0 text-danger" >
  @error('image')
  {{$message}}

  @enderror

</div>




<div class="modal-footer">
        
        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>

        <button type="submit" name="" class="btn task-action-btn" id="task-save-btn">Save</button>

    </div>


  </div>
  
</form>


</div>
</x-admin>