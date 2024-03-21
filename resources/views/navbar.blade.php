
<div class="container-fluid mx-3 p-0 nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
        <div class="container">
            <a href="{{ route('welcome') }}" class="navbar-brand px-lg-4 m-0 mr-auto">
                <img class="w-100" src="{{asset('img/logoJoseAnilloBlanco.png')}}" width="100" height="100"
                     alt="José Anillo">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}"  class="nav-link a-item {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('course.index') }}"
                           class="nav-link a-item {{ Route::currentRouteName() === 'course.index' ? 'active' : '' }}">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link a-item">Conciertos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery.index') }}"
                           class="nav-link a-item {{ Route::currentRouteName() === 'gallery.index' ? 'active' : '' }}">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop.index') }}" class="nav-link a-item {{ Route::currentRouteName() === 'shop.index' ? 'active' : '' }}">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact.index') }}"
                           class="nav-link a-item {{ Route::currentRouteName() === 'contact.index' ? 'active' : '' }}">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
