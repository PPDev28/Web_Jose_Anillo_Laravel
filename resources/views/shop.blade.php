<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tienda | Jose Anillo</title>
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
@include('navbar')

@include('header', ['title' => 'Tienda'])

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <p><b>Próximamente...</b></p>
            {{-- <div class="col-lg-4 col-md-6 py-3">
                <img class="img-fluid" src="{{asset('img/disco_Jose_Anillo.jpg')}}" alt="Disco">
                <h5 class="mb-3 mt-3 text-center">Los balcones de mi sueño
                    - Disco de CD</h5>
                <b> <p class="text-dark bold text-center">20,00$</p> </b>
                <a href="" class="btn btn-secondary d-flex font-weight-bold justify-content-center">Añadir al carrito</a>
            </div> --}}
        </div>
    </div>
</div>
<!-- About End -->

@include('footer')
</body>
</html>
