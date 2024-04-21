<div class="container-fluid mx-3 p-0 nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light py-2 navbar-expand-md">
        <div class="container">
            <a href="{{ route('welcome') }}" class="navbar-brand px-lg-4 m-0 mr-auto">
                <img src="{{asset('img/logoJoseAnilloBlanco.png')}}" width="200" height="100" alt="José Anillo">
            </a>
            <button type="button" class="navbar-toggler" id="menu-toggle">
                <svg class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" width="23" height="15"
                    viewBox="0 0 23 15" fill="none">
                    <path d="M23 1H0" stroke="white"></path>
                    <path d="M23 8H0" stroke="white"></path>
                    <path d="M23 14H0" stroke="white"></path>
                </svg>
            </button>
            <div class="collapse navbar-collapse ul-container d-none" id="navbarCollapse">
                <ul class="navbar-nav ml-auto" id="nav-links">
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}"
                            class="nav-link a-item {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('biography.index') }}"
                           class="nav-link a-item {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">BIOGRAFÍA</a>
                    </li>
                    {{--<li class="nav-item">
                        <a href="{{ route('course.index') }}"
                            class="nav-link a-item {{ Route::currentRouteName() === 'course.index' ? 'active' : '' }}">CURSOS</a>
                    </li>--}}
                    <li class="nav-item">
                        <a href="#" class="nav-link a-item">EVENTOS</a>
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
            // $('.ul-container').toggleClass('bg-transparent');
        });
    });
</script>
