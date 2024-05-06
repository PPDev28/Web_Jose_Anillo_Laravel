<div class="container-fluid mx-3 p-0 nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light py-2 navbar-expand-md">
        <div class="container">
            <a href="{{ route('welcome') }}" class="navbar-brand px-lg-4 m-0 mr-auto">
                <img src="{{asset('img/logoJoseAnilloBlanco.png')}}" width="200" height="100" alt="José Anillo">
            </a>
            <button type="button button-mobile" class="navbar-toggler" id="menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            <button type="button button-mobile" class="navbar-toggler" id="menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
            <div class="collapse navbar-collapse ul-container" id="navbarCollapse">
                <ul class="navbar-nav ml-auto" id="nav-links">
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}"
                            class="nav-link a-item {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('biography.index') }}"
                           class="nav-link a-item {{ Route::currentRouteName() === 'biography.index' ? 'active' : '' }}">BIOGRAFÍA</a>
                    </li>
                    {{--<li class="nav-item">
                        <a href="{{ route('course.index') }}"
                            class="nav-link a-item {{ Route::currentRouteName() === 'course.index' ? 'active' : '' }}">CURSOS</a>
                    </li>--}}
                    <li class="nav-item">
                        <a href="{{ route('event.index') }}"
                           class="nav-link a-item {{ Route::currentRouteName()  === 'event.index' ? 'active' : '' }}">EVENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop.index') }}"
                           class="nav-link a-item {{ Route::currentRouteName() === 'shop.index' ? 'active' : '' }}">TIENDA</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery.index') }}"
                            class="nav-link a-item {{ Route::currentRouteName() === 'gallery.index' ? 'active' : '' }}">GALERIA</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact.index') }}"
                            class="nav-link a-item {{ Route::currentRouteName() === 'contact.index' ? 'active' : '' }}">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#menu-toggle').click(function () {
            console.log("Validación de click");
            $('.collapse').slideToggle();
            $('.navbar-nav').toggleClass('navbar-dark-bg');
            // $('.ul-container').toggleClass('bg-transparent');
        });
    });
</script>