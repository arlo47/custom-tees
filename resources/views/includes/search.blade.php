<form method="GET" action="/search">
    <!-- CSRF (cross-site request forgery) is required for all form submits in laravel. 
    It generates a token for security -->
    @csrf
    <input type="text" name="search" id="search-bar">
    <input type="submit" value="Search">
</form>