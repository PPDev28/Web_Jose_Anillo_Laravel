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

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

</head>
<body>
@include('navbar')

@include('header', ['parent' => 'event'])

<div class="container">
    <div class="event">
        <img src="{{ asset('img/little_event_1.webp') }}" alt="Evento 1">
        <div class="event-info">
            <h2>2 de Mayo de 2024, Palomares del Río (Sevilla)</h2>
            <p>Festival Guirijondo con Carmela Riqueni</p>
            <h2>18 de Mayo de 2024, Hospitalet (Barcelona)</h2>
            <p>Máster Class en Tertulia Flamenca de Hospitalet</p>
        </div>
    </div>

    <div class="event">
        <img src="{{ asset('img/little_event_2.webp') }}" alt="Evento 2">
        <div class="event-info">
            <h2>19 de MAyo de 2024, Hospitalet (Barcelona)</h2>
            <p>Recital de Cante en Tertulia Flamenca de Hospitalet</p>
            <h2>25 de Mayo de 2024, Cerro del Águila (Sevilla)</h2>
            <p>Recital de Cante en Peña Flamenca del Cerro del Águila</p>
        </div>
    </div>
</div>

@include('footer2')
</body>
