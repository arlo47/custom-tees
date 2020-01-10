<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title>Custom Tees</title>      
    </head>
    <body>

        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h1 class="text-center text-lg-left"><a class="brand-name" href="#">Custom Tees</a></h1>
                    </div>
                    <div class="col-12 col-lg-7 w-lg-100 d-lg-flex align-items-lg-center">
                        @include('includes.search')                      
                    </div>
                </div>
            </div>
            <section class="nav-row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-lg-flex justify-content-lg-end">
                            @include('includes.navbar')
                            
                        </div>
                    </div>
                </div>
            </section>
        </header>


        <div class="container">
            @include('includes.messages')
            @yield('content')
        </div>

        <!-- For Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
                crossorigin="anonymous"></script>
    </body>
</html>
