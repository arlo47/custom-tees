<form method="GET" action="/search">
    <!-- CSRF (cross-site request forgery) is required for all form submits in laravel. 
    It generates a token for security -->
    <?php echo csrf_field(); ?>
    <input type="text" name="search" id="search-bar">
    <input type="submit" value="Search">
</form><?php /**PATH C:\Users\gregf\Desktop\custom-tees-greg\resources\views/includes/search.blade.php ENDPATH**/ ?>