<!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #97FCC7;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TBC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product')}}">product</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->


<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light" style="background-color: 	#4186f5">
 <div class="container">
 <img src={{url('/images/img1.jpg')}} width="70" height="60" alt=""/><br>

      <a class="navbar-brand" href="#"><h1>Stationary E-Shop</h1></a><br>
      <img src={{url('/images/st3.webp')}} width="70" height="60" alt=""/><br>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ms-auto">
    <button style="background-color: #e7e7e7;"class="nav-item"><a class="nav-link" href="{{route('home')}}"> <h5>Home</h5> </a></li></button>
        <button style="background-color: #e7e7e7;" class="nav-item"><a class="nav-link" href="{{route('product')}}"><h5> Product</h5></a></li></button>
        <button style="background-color: #e7e7e7;"class="nav-item"><a class="nav-link" href="{{route('report')}}"><h5>Report</h5></a></li> </button>
        <button style="background-color: #e7e7e7;" class="nav-item"><a class="nav-link" href="{{route('products.mycart')}}"><h5>Cart</h5></a></li></button>
       <button style="background-color: #e7e7e7;"  class="nav-item"><a class="nav-link" href="{{route('products.emptycart')}}"><h5>Empty Cart</h5></a></li> </button>

        @if(Session::has('customer'))
        <button style="background-color: #e7e7e7;"  class="nav-item"><a class="nav-link" href="{{route('profile')}}"><h5>Profile</h5></a></li> </button>

        <button style="background-color: #e7e7e7;"  class="nav-item"><a class="nav-link" href="{{route('customer.myorders')}}"><h5>My Orders</h5></a></li></button>

        @else

      <button style="background-color: #e7e7e7;"  class="nav-item"><a class="nav-link" href="{{route('login')}}"><h5>Login</h5></a></li></button>

      <button style="background-color: #e7e7e7;" class="nav-item"><a class="nav-link" href="{{route('signup')}}"><h5>Signup</h5></a></li></button>
        @endif
      
    </ul>
  <div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav ms-auto">
  <button  style="background-color: #f44336;" class="nav-item"><a class="nav-link" href="{{route('logout')}}"><h5>Logout</h5></a></li></button>

    </ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        navbar_width = document.querySelector('.navbar').offsetWidth;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
         document.body.style.paddingTop = '0';
      } 
  });
});
</script>