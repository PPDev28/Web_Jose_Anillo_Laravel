<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cursos | Jose Anillo</title>
    <link rel="icon" href="{{ asset('img/Favicon_JA.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/navbar-scroll.js') }}"></script>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

</head>

<body>
<!-- @include('new-navbar') -->

<!-- @include('header', ['title' => 'Cursos']) -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 py-3">
                <h2 class="mb-3">Curso de Cante Avanzado</h2>
                <img class="img-fluid" src="{{asset('img/jose2.png')}}" alt="Curso de Cante Avanzado">
                <h5 class="mb-3 mt-3">Descripción del curso</h5>
                <p></p>
                <a href="{{ route('contact.index') }}" class="btn btn-secondary font-weight-bold py-2 px-4 mt-1">Contacta
                    conmigo</a>
            </div>
            <div class="col-lg-4 col-md-6 py-3">
                <h2 class="mb-3">Curso de Cante Flamenco</h2>
                <img class="img-fluid" src="{{asset('img/jose1.png')}}" alt="Curso de Cante Flamenco">
                <h5 class="mb-3 mt-3">Descripción del curso</h5>
                <p></p>
                <a href="{{ route('contact.index') }}" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Contacta
                    conmigo</a>
            </div>
            <div class="col-lg-4 col-md-6 py-3">
                <h2 class="mb-3">Curso de Guitarra Flamenca</h2>
                <img class="img-fluid h-25" src="{{asset('img/guitarra.png')}}" alt="Curso de Guitarra Flamenca">
                <h5 class="mb-3 mt-3">Descripción del curso</h5>
                <a href="{{ route('contact.index') }}" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2 align-items-center">Contacta
                    conmigo</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('footer2')
</body>
</html>
