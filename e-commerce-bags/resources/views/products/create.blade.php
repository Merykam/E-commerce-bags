<x-admin>



<form class="">


<h3 class="text-white drink text-center text-center1 bg mt-5 fw-bold">Add new product</h3>
<div class="mt-5">


  <div class="form-row row">
    <div class="form-group col-6">
      <label for="inputEmail4 fw-bold" class="fw-bold">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-6">
      <label for="inputPassword4 fw-bold" class="fw-bold">Category</label>
      <select id="inputState" class="form-control">
        <option selected>Choose category...</option>
        <option>...</option>
      </select>
    </div>
  </div>
 <div class="row">
 <div class="form-group col-6 ">
    <label for="inputAddress " class="fw-bold">Color</label>
    <select id="inputState" class="form-control">
        <option selected>Choose colors...</option>
        <option>Green</option>
        <option>Red</option>
        <option>Yellow</option>
      </select>
  </div>
  <div class="form-group col-6">
    <label for="inputAddress2 " class="fw-bold">Price</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Bug price">
  </div>

 </div>
  <div class="form-row row">
    <div class="form-group col-md-6">
      <label for="inputCity " class="fw-bold">Discount price</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState" class="fw-bold">In stock</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>0</option>
        <option>1</option>
      </select>
    </div>
    <div class="form-group col">
      <label for="inputCity " class="fw-bold">Image</label>
      <input type="file" class="form-control" id="inputCity">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1" class="fw-bold">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   
  </div>
 
  </div>
  <button type="submit" class="btn btn-dark mt-4">Save</button>
  </div>
</form>

</x-admin>