<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio | Jose Anillo</title>
        <link rel="icon" href="{{ asset('img/Favicon_JA.png') }}" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/navbar-scroll.js') }}"></script>

        <!-- Scripts de Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

        <script src="{{asset('js/home-transition.js')}}"></script>

    </head>
    <body>
    @include('navbar')
    <div class="carousel-container">
        <div class="carousel-custom">
            <div class="pic visible">
                <img src="{{asset('img/home_1.webp')}}" alt="jose1">
            </div>
            <div class="pic">
                <img src="{{asset('img/home_2.webp')}}" alt="jose2">
            </div>
            <div class="pic">
                <img src="{{asset('img/home_3.webp')}}" alt="jose3">
            </div>
        </div>
    </div>

    @include('footer2')
    </body>
</html>
