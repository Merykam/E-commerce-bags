<x-admin>


<div class="form-create">






<form action="" method="post">
    @csrf 
    <h3 class="text-white drink text-center bg-dark mt-5 fw-bold">Add new category</h3>
<div class="form-row mt-3">


<div class="col mb-0">
    <label class="form-label fw-bold">Catrgory name</label>
    <input value="{{old('name')}}" type="text" class="form-control"  name="name" />
</div>

<div class="m-0 text-danger">
  @error('name')
  {{$message}}

  @enderror

</div>
  

<!-- <div class="col mb-3">
  <label class="form-label">Picture</label>
  <input type="file" class="form-control" id="task-title" name="pic"/>
</div> -->
<div class="col  mb-0">
  <label class="form-label fw-bold">Image</label>
  <input value="{{old('price')}}" type="file" class="form-control fw-bold" id="task-title" name="pic"/>
</div>
<div class="m-0 text-danger" >
  @error('price')
  {{$message}}

  @enderror

</div>




<div class="modal-footer">
        
        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>

        <button type="submit" name="Add_lyrics" class="btn task-action-btn" id="task-save-btn">Save</button>

    </div>


  </div>
  
</form>


</div>
</x-admin>