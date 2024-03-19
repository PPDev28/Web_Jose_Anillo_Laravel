<div class="container-fluid mx-3 p-0 nav-bar">
    <nav class="navbar navbar-expand-lg navbar-dark py-2">
        <div class="container">
            <a href="{{ route('welcome') }}" class="navbar-brand px-lg-4 m-0 mr-auto"> <!-- Añadí la clase mr-auto para separar el nombre hacia el extremo izquierdo -->
                <h1 class="m-0 display-5 text-uppercase text-white" style="font-size: 24px;">JOSE ANILLO</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto"> <!-- Añadí la clase ml-auto para separar los enlaces hacia el extremo derecho -->
                    <a href="{{ route('welcome') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">Inicio</a>
                    <a href="{{ route('course.index') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'course.index' ? 'active' : '' }}">Cursos</a>
                    <a href="#" class="nav-item nav-link">Conciertos</a>
                    <a href="{{ route('gallery.index') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'gallery.index' ? 'active' : '' }}">Galería</a>
                    <a href="#" class="nav-item nav-link">Tienda</a>
                    <a href="{{ route('contact.index') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'contact.index' ? 'active' : '' }}">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
