<form method="GET" action="/search" class="my-2 my-lg-0 w-100">
    <!-- CSRF (cross-site request forgery) is required for all form submits in laravel. 
    It generates a token for security -->
    <?php echo csrf_field(); ?>
    <div class="input-group md-form form-sm form-2 pl-0">
        <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button type="submit" class="input-group-text search-icon">
              <i class="material-icons">search</i>
            </button>
        </div>
      </div>
</form><?php /**PATH C:\Users\1332549\Desktop\custom-tees2\PHPShoppingSiteV2\custom-tees\resources\views/includes/search.blade.php ENDPATH**/ ?>