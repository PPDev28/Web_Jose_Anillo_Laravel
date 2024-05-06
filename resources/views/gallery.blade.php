<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Galería | Jose Anillo</title>
    <link rel="icon" href="{{ asset('img/Favicon_JA.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/navbar-scroll.js') }}"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>


    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

</head>

<body>


@include('navbar') 

@include('header', ['parent' => 'gallery'])

<!-- Gallery -->

{{--Fotos--}}
<section>
    <div class="container">
        <table class="table">
            <tbody>
            <tr>
                <td>
                    <img class="img-fluid gallery-img" src="{{asset('img/gallery_5.webp')}}" id="gal">
                </td>
                <td>
                    <img class="img-fluid gallery-img" src="{{asset('img/gallery_6.webp')}}" id="gal">
                </td>
            </tr>
            <tr>
                <td>
                    <img class="img-fluid gallery-img" src="{{ asset('img/gallery_1.webp') }}" id="gal">
                </td>
                <td>
                    <img class="img-fluid gallery-img" src="{{asset('img/gallery_2.webp')}}" id="gal">
                </td>
            </tr>
            <tr>
                <td>
                    <img class="img-fluid gallery-img" src="{{asset('img/gallery_3.webp')}}" id="gal">
                </td>
                <td>
                    <img class="img-fluid gallery-img" src="{{asset('img/gallery_4.webp')}}" id="gal">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<!--<section class="gallery-section">
    <div class="container gallery-container">
        <div class="gallery-row">
            <div class="gallery-column">
                <img class="img-fluid gallery-img" src="{{ asset('img/gallery_5.webp') }}" id="gal5">
            </div>
            <div class="gallery-column">
                <img class="img-fluid gallery-img" src="{{ asset('img/gallery_6.webp') }}" id="gal6">
            </div>
        </div>-->
        <!--<div class="gallery-row">
            <div class="gallery-column">
                <img class="img-fluid gallery-img" src="{{ asset('img/gallery_1.webp') }}" id="gal1">
            </div>
        </div>
        <div class="gallery-row">
            <div class="gallery-column">
                <img class="img-fluid gallery-img" src="{{ asset('img/gallery_2.webp') }}">
            </div>
            <div class="gallery-column">
                <img class="img-fluid gallery-img" src="{{ asset('img/gallery_3.webp') }}">
            </div>
        </div>
        <div class="gallery-row">
            <div class="gallery-column">
                <img class="img-fluid gallery-img" src="{{ asset('img/gallery_4.webp') }}">
            </div>
            <div class="gallery-column">
                <img class="img-fluid gallery-img" src="{{ asset('img/gallery_main.webp') }}">
            </div>
        </div>-->
    <!--</div>
</section>-->


<!-- Videos -->
<!-- <section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube-nocookie.com/embed/h5_0-rKfDFU?si=rSaDXj5dS4s7X-9Q"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube-nocookie.com/embed/OkAz8dPubZE?si=8lsDa7rr7VjpkjXI"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>  -->
<!-- End Videos -->

<!-- End Gallery -->
@include('footer2')
</body>
