

   
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Vascon Solutions Cinemas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
      </ul>
      
      @guest
      <a href="{{route('login')}}"><button class="btn btn-outline-info btn-sm mr-2">Login</button> </a>||

     <a href="{{route('register')}}"><button class="btn btn-outline-info btn-sm">Register</button></a>
     @endguest
     
     @auth
     <a href="{{route('showtime')}}"><button class="btn btn-outline-info btn-sm">Create Showtime</button></a>||

     <a href="{{route('movie')}}"><button class="btn btn-outline-info btn-sm">Create Movie</button></a>||

     <a href="{{route('logout')}}"><button class="btn btn-outline-info btn-sm">Logout</button></a>


     @endauth


    </div>
  </div>
</nav>


