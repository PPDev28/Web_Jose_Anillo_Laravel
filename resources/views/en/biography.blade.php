<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Biography | Jose Anillo</title>
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
@include('en/new-navbar')

@include('header', ['parent' => 'biography'])

<!-- About Start -->
<div class="container-fluid py-5 ">
    <div class="container">
        <div>
            <div>
                <h1 style="color: white">My History</h1>
                <p style="text-align: justify">
                    José Anillo, was born in Cádiz, on July 9, 1978. His first artistic steps were singing in the scenes of numerous dance academies in Cádiz, San Fernando, and Chiclana. He began his professional career as part of Manuela Carrasco's company, debuting at the Teatro de la Villa in Madrid and the Gran Teatro Falla in Cádiz.
                    At the age of 18, he continued his career in various companies such as, Cristina Hoyos, Belén Maya, Joaquín Grillo, Israel Galván, Javier Latorre, and Rafael Campallo, among others.
                    He was selected to be part of the playbill, “Los 12 Nombres para Empezar el Siglo XXI”, of the Granada Music and Dance Festival. In August 2003, he won the “Premio Nacional de Cantes por Alegrías de Cádiz” in the edition dedicated to Manolo Vargas. In 2011, he won the “Disco Revelación” award with “Los Balcones de Mi Sueño”, and in 2016, he won the “Premio Nacional de Córdoba Absoluto”. This same year, he takes the award for “Cantes Bajos Andaluces” por Alegrías de Cádiz from the “Concurso de Las Minas”.
                    Singing to numerous artists, he has been present on a number of Spanish television programs. He has also been featured in recording collaborations with artists such as, Paco de Lucía, Capullo de Jerez, and Fernando de la Morena, as well as in the collective album, “Flamenco por Andalucía, España y la Humanidad”, together with the singers Encarna Anillo and La Tana.
                    His singing has traveled to many countries throughout the American continent, to Asian countries such as Japan, the Philippines, and throughout Europe, including many Spanish cities.
                    He has his online singing academy called Comunidad Anillo, he does workshops at dance academies, and in a personalized manner, prepares future singers.
                </p>
                <a href="{{ route('bio.index') }}" download="Biografia" class="btn" style="background-color: white; color: black;">Dossier</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('footer2')
</body>
</html>
