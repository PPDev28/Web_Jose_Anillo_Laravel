<header class="header">

    <h1 class="h1">
        <a href="{{ route('welcome') }}" class="a-custom">
            <img src="{{asset('img/logoJoseAnilloBlanco.png')}}" width="100" height="100" alt="José Anillo">
        </a>
    </h1>


    <button class="button-navbar">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </button>

    <nav class="new-navbar">
        <ul class="ul">
            <li class="li"><a href="{{ route('welcome.index.en') }}" class=" a-custom {{ Route::currentRouteName() === 'welcome.index.en' ? 'active' : '' }}">HOME</a></li>
            <li class="li"><a href="{{ route('biography.index.en') }}" class="a-custom {{ Route::currentRouteName() === 'biography.index.en' ? 'active' : '' }}">BIOGRAPHY</a></li>
            <li class="li"><a href="{{ route('event.index') }}" class="a-custom {{ Route::currentRouteName() === 'event.index' ? 'active' : '' }}">EVENTS</a></li>
            <li class="li"><a href="{{ route('shop.index') }}" class="a-custom {{ Route::currentRouteName() === 'shop.index' ? 'active' : '' }}">SHOP</a></li>
            <li class="li"><a href="{{ route('gallery.index') }}" class="a-custom {{ Route::currentRouteName() === 'gallery.index' ? 'active' : '' }}">GALLERY</a></li>
            <li class="li"><a href="{{ route('contact.index') }}" class="a-custom {{ Route::currentRouteName() === 'contact.index' ? 'active' : '' }}">CONTACT</a></li>
        </ul>
    </nav>

</header>
