
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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        Logout
        @csrf
       </form>
        <a href="{{ route('logout') }}" class="text-white text-decoration-none py ripple"
          ><i class="bi bi-box-arrow-left"></i><span class="ml">Logout</span></a
        >
       
      </div>
    </div>
    


  </nav>
  <!-- Sidebar -->
