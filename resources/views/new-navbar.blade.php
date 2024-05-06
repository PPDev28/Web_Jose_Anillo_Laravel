<header class="header">

    <h1 class="h1">
        <a href="{{ route('welcome') }}" class="a">
            <img src="{{asset('img/logoJoseAnilloBlanco.png')}}" width="100" height="100" alt="José Anillo">
        </a>
    </h1>


    <button class="button">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </button>

    <nav class="nav">
        <ul class="ul">
            <li class="li"><a href="{{ route('welcome') }}" class=" a {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">INICIO</a></li>
            <li class="li"><a href="{{ route('biography.index') }}" class="a {{ Route::currentRouteName() === 'biography.index' ? 'active' : '' }}">BIOGRAFIA</a></li>
            <li class="li"><a href="{{ route('event.index') }}" class="a {{ Route::currentRouteName() === 'event.index' ? 'active' : '' }}">EVENTOS</a></li>
            <li class="li"><a href="{{ route('shop.index') }}" class="a {{ Route::currentRouteName() === 'shop.index' ? 'active' : '' }}">TIENDA</a></li>
            <li class="li"><a href="{{ route('gallery.index') }}" class="a {{ Route::currentRouteName() === 'gallery.index' ? 'active' : '' }}">GALERIA</a></li>
            <li class="li"><a href="{{ route('contact.index') }}" class="a {{ Route::currentRouteName() === 'contact.index' ? 'active' : '' }}">CONTACTO</a></li>
        </ul>
    </nav>

</header>