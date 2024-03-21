<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Galería | Jose Anillo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/navbar-scroll.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

</head>

<body class="body">

@include('navbar')

@include('header', ['title' => 'Galería'])

<!-- Gallery -->

{{--Fotos--}}
<section>
    <div class="container">
        <div class="card-columns">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/jose2.png')}}" alt="Imagen de José 2">
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('img/jose2.png')}}" alt="Imagen de José 2">
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('img/jose2.png')}}" alt="Imagen de José 2">
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('img/jose1.png')}}" alt="Imagen de José 1">
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('img/jose1.png')}}" alt="Imagen de José 1">
            </div>
            <div class="card border-0">
                <img class="card-img-top" src="{{asset('img/guitarra.png')}}" alt="Imagen de una guitarra">
            </div>
        </div>
    </div>
</section>



{{--Videos--}}
<section class="mt-5">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="mr-3">
            <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/h5_0-rKfDFU?si=rSaDXj5dS4s7X-9Q"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>
        <div>
            <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/OkAz8dPubZE?si=8lsDa7rr7VjpkjXI"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- End Gallery -->

@include('footer')
</body>
