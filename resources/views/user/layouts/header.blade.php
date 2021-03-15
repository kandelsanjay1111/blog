  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{route('user.home')}}">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('page','about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('page','contact')}}">Contact</a>
          </li>
          @if(Auth::user('user'))
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard')}}">Dashboard</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
            <form action="{{route('logout')}}" method="POST" type="hidden" id="logout">
              {{csrf_field()}}
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login/Register</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('@yield('bg-img')')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>@yield('heading')</h1>
            <h2 class="subheading">@yield('subheading')</h2>
          </div>
        </div>
      </div>
    </div>
  </header>