  <nav class="navbar navbar-expand-lg w-100 d-block">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="material-icons">menu</i></span>
    </button>
  
    <div class="collapse navbar-collapse justify-content-lg-between" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/shirts">Shop</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-light" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav user-info">  
          @guest
              <li class="nav-item">
                  <a class="nav-link text-light d-flex align-items-center" href="{{ route('login') }}"><i class="material-icons mr-1">input</i> {{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link text-light d-flex align-items-center" href="{{ route('register') }}"><i class="material-icons mr-1">assignment_ind</i> {{ __('Register') }}</a>
                  </li>
              @endif
          @else
            <li class="nav-item">
              <span class="nav-link text-light d-flex align-items-center"><i class="material-icons">account_box</i> {{ Auth::user()->name }}</span> 
            </li>
            <li class="nav-item">
              <a class="nav-link text-light d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="material-icons">exit_to_app</i> {{ __('Logout') }}
              </a>   
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
            </li>
            <li class="nav-item">
              @if(Auth::user()->id == 1)
                <a class="nav-link text-light d-flex align-items-center" href="/admin"><i class="material-icons">settings_applications</i> admin panel</a>
              @endif 
            </li>
            @endguest      
        </ul>
      </div>
          
    </div>
  </nav>

 