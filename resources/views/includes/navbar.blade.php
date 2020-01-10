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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <span class="text-white">{{ Auth::user()->name }}</span>
                                <li class="nav-item">
                                  <a class="nav-link text-light d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                  </a>
                                  @if(Auth::user()->id == 1)
                                  <a href="/admin">admin panel</a>
                                  @endif    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest      
      </ul>
    </div>
  </nav>
<li class="nav-item">
                                <a class="nav-link" href="/cart/{{Auth::id()}}">Shopping Cart</a>
                            </li>
