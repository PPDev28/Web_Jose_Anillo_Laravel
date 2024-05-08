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
    <script src="{{ asset('js/menu-toggle.js') }}"></script>
    
    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

</head>

<body>
@include('new-navbar')

@include('header', ['parent' => 'shop'])

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <p><b>Próximamente...</b></p>

            @if(config('locale.status') && count(config('locale.languages')) > 1)
                <!--<div>
                    @foreach (array_keys(config('locale.languages')) as $lang)
                        @if ($lang != App::getLocale())
                            <a href="{!! route('lang.swap', $lang) !!}">
                                {!! $lang !!} <small>{!! $lang !!}</small>
                                <h4> {!! trans('messages.welcome') !!} </h4>
                            </a>
                        @endif
                    @endforeach
                </div>-->

            @endif


        </div>
    </div>
</div>
<!-- About End -->

@include('footer2')
</body>
</html>
