<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eventos | Jose Anillo</title>
    <link rel="icon" href="{{ asset('img/Favicon_JA.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/navbar-scroll.js') }}"></script>
    <script src="{{ asset('js/menu-toggle.js') }}"></script>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
</head>
<body>
@include('es/new-navbar')

@include('header', ['parent' => 'event'])

<div class="container">
    <div class="event">
        <img src="{{ asset('img/little_event_1.webp') }}" alt="Evento 1">
        <div class="event-info">
            <h2>4 de Octubre de 2024, Otros oles flamencos(Sevilla)</h2>
            <p>Maestros del baile de Sevilla</p>
            <h2>13 de Octubre</h2>
            <p>Con Carmela Riqueni en la plazuela (Sevilla)</p>
        </div>
    </div>

    <div class="event">
        <img src="{{ asset('img/little_event_2.webp') }}" alt="Evento 2">
        <div class="event-info">
            <h2>14 al 18 de Octubre</h2>
            <p>Gira Shangai</p>
            <h2><b>Reseñas</b></h2>
            <p><a
                    href="https://www.expoflamenco.com/cronicas/jose-anillo-y-los-pellizcos-de-sal-pena-flamenca-cerro-del-aguila/?fbclid=IwZXh0bgNhZW0CMTEAAR3qMnwxAkUIP9mjROsdp0RqG_wDJ8DUbwUxOPr1G2c_JXX2MFCVVuGWJO0_aem_AcYXQmW05WO-WH9N1IYdzbElUCtqOGLozF6S6Yl-u3BMTlKHd8DaI-3K6rWY2eL_0R0IOjc5Sw2R-tWb_rAlE9ox"
                    target="_blank">
                    José Anillo y los pellizcos de sal
                </a>
            </p>
        </div>
    </div>
</div>

@include('footer2')
</body>
