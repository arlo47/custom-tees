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
        <li class="nav-item"><a class="nav-link text-light d-flex align-items-center" href="<?php echo e(route('login')); ?>"><i class="material-icons mr-1">account_box</i>Login</a></li>
        <li class="nav-item"><a class="nav-link text-light d-flex align-items-center" href="/admin"><i class="material-icons mr-1">settings_applications</i> Admin Panel</a></li>      
      </ul>
    </div>
  </nav>

<?php /**PATH C:\Users\TrackTik\Desktop\custom-tees3\PHPShoppingSiteV2\custom-tees\resources\views/includes/navbar.blade.php ENDPATH**/ ?>