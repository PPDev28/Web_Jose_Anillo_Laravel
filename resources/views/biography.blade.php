<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Biografía | Jose Anillo</title>
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

@include('header', ['parent' => 'biography'])

<!-- About Start -->
<div class="container-fluid py-5 ">
    <div class="container">
        <div>
            <div>
                <h1 style="color: black">Mi Historia</h1>
                <p>
                    José Anillo, nació en Cádiz, el 9 de julio de 1978.
                    Sus primeros pasos artísticos fueron cantando en los cuadros de numerosas academias de
                    baile de Cádiz, San Fernando, y Chiclana. Comenzó su carrera profesional formando parte de la
                    compañía de Manuela Carrasco, debutando en el Teatro de la Villa de Madrid y en el Gran Teatro Falla
                    de Cádiz. A los 18 años, continuó su carrera en diversas compañías como las de Cristina Hoyos,
                    Belén Maya, Joaquín Grillo, Israel Galván, Javier Latorre, y Rafael Campallo, entre otros.
                    Fue seleccionado para integrar el cartel, “Los 12 Nombres para Empezar el Siglo XXI”,
                    del Festival de Música y Danza de Granada. En agosto de 2003, consiguió el “Premio Nacional
                    de Cantes por Alegrías de Cádiz” en la edición dedicada a Manolo Vargas. En el 2011, recibió el
                    premio “Disco Revelación” con “Los Balcones de Mi Sueño”, y en 2016, alcanza el “Premio Nacional de
                    Córdoba Absoluto”. Este mismo año se lleva el galardón a los “Cantes Bajos Andaluces” por Alegrías
                    de Cádiz del “Concurso de Las Minas”. Cantándole a numerosos artistas, ha estado presente en
                    una cantidad de programas de la televisión española. También ha protagonizado colaboraciones
                    discográficas con artistas como Paco de Lucía, Capullo de Jerez, y Fernando de la Morena,
                    así como en el disco colectivo, “Flamenco por Andalucía, España y la Humanidad”, junto a las
                    cantaoras Encarna Anillo y La Tana. Su cante ha viajado a multitud de países de todo el continente
                    americano, a países asiáticos como Japón, Filipinas, y a toda Europa, incluyendo muchas ciudades españolas.
                    Tiene su academia online de cante llamada Comunidad Anillo, hace talleres en academias de baile, y
                    prepara de manera personalizada a futuros cantaores.

                </p>
                <a href="{{ route('bio.index') }}" download="Biografia" class="btn btn-dark">Biografia</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('footer2')
</body>
</html>
