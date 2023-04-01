@extends('layouts.app')

@section('Sidebar')

 <!-- Sidebar -->
 <nav id="sidebarMenu" class="collapse d-lg-block sidebar vh-100 position-fixed">
    <div class="position-sticky ">
      <div class="list-group list-group-flush">
        <a
          href="#"
          class=" text-decoration-none text-white mt-4  py ripple"
          aria-current="true"
        
        >
        <i class="bi bi-speedometer2"></i><span class="ml">Dashboard</span>
        </a>
        <a
          href="#"
          class=" text-decoration-none text-white   py ripple"
          aria-current="true"
        
        >
        <i class="bi bi-bar-chart"></i><span class="ml">Statistics</span>
        </a>
        
        <a href="#" class="text-white  text-decoration-none py  ripple active">
        <i class="bi bi-card-list"></i><span class="ml">Categories</span>
        </a>
        <a href="#" class="text-white  text-decoration-none py ripple"
          ><i class="bi bi-box-seam"></i><span class="ml">Products</span></a
        >
        <a href="#" class="text-white text-decoration-none py ripple"
          ><i class="bi bi-cart3"></i><span class="ml">Orders</span></a
        >
        <a href="#" class="text-white text-decoration-none py ripple">
        <i class="bi bi-people"></i><span class="ml">Users</span>
        </a>
       
        <a href="#" class="text-white text-decoration-none py ripple"
          ><i class="bi bi-gear"></i><span class="ml">Settings</span></a
        >
        <a href="#" class="text-white text-decoration-none py ripple"
          ><i class="bi bi-box-arrow-left"></i><span class="ml">Logout</span></a
        >
       
      </div>
    </div>
    


  </nav>
  <!-- Sidebar -->


@endsection


@section('card')

<div class="cards d-flex">


<div class="card " >

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

</div>

</div>
@endsection
