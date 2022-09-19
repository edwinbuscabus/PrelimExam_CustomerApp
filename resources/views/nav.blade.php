<nav class="navbar navbar-expand-lg text-white bg-secondary mb-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><b>Customer App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          @if (auth()->check())
          <a class="nav-link" href="/dashboard"><b>Dashboard</b></a>
          <a class="nav-link" href="{{'/logout'}}"><b>Logout</b></a>  
          @else
          <a class="nav-link" href="/register"><b>Register</b></a>
          <a class="nav-link" href="/"><b>Login</b></a> 
              
          @endif
          
        </div>
      </div>
    </div>
  </nav>