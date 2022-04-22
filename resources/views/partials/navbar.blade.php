<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">Telkom Akses</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/form">Formulir Registrasi</a>
        </li>
        
      </ul>
      
      <ul class="navbar-nav">
      
        
      </ul>
    </div>
    <ul class="navbar-nav">
      <li>
      <a class="nav-link" aria-current="page" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</li>
        
    
    <a class="navbar-brand" href="#"text-align="center;">{{ Auth::user()->name }}</a>

</ul>
  </div>
</nav>





  