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
          <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item">
                  <a class="nav-link text-light d-flex align-items-center" href="<?php echo e(route('login')); ?>"><i class="material-icons mr-1">input</i> <?php echo e(__('Login')); ?></a>
              </li>
              <?php if(Route::has('register')): ?>
                  <li class="nav-item">
                      <a class="nav-link text-light d-flex align-items-center" href="<?php echo e(route('register')); ?>"><i class="material-icons mr-1">assignment_ind</i> <?php echo e(__('Register')); ?></a>
                  </li>
              <?php endif; ?>
          <?php else: ?>
            <li class="nav-item">
              <span class="nav-link text-light d-flex align-items-center"><i class="material-icons">account_box</i> <?php echo e(Auth::user()->name); ?></span> 
            </li>
            <li class="nav-item">
              <a class="nav-link text-light d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="material-icons">exit_to_app</i> <?php echo e(__('Logout')); ?>

              </a>   
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"> <?php echo csrf_field(); ?> </form>
            </li>
            <li class="nav-item">
              <?php if(Auth::user()->id == 1): ?>
                <a class="nav-link text-light d-flex align-items-center" href="/admin"><i class="material-icons">settings_applications</i> admin panel</a>
              <?php endif; ?> 
            </li>
            <?php endif; ?>
            <?php if(Auth::check() && (Auth::id()!= 1)): ?>   
            <li class="nav-item">
              <a class="nav-link text-light d-flex align-items-center" href="/cart/<?php echo e(Auth::id()); ?>"><i class="material-icons">shopping_cart</i> Shopping Cart</a>
          </li>
            <?php endif; ?>   
        </ul>
      </div>
    </div>
  </nav>

 
<?php /**PATH C:\Users\Mohammed Malik\Documents\repos\custom-tees\resources\views/includes/navbar.blade.php ENDPATH**/ ?>