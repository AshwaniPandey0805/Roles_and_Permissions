<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="navbar-text">
        @auth
          {{auth()->user()->first_name}} {{auth()->user()->last_name}} 
        @else
          {{config('app.name')}}
        @endauth
      </span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
  
          {{-- auth validation --}}
          @auth
            <li class="nav-item">
              <a class="nav-link" href="{{route('signOut.post')}}">Logout</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('signIn.get')}}">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('signUp.get')}}">Sign Up</a>
            </li>
          @endauth
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
        
      </div>
    </div>
  </nav>