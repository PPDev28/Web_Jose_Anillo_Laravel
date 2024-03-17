<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="#" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">JOSE ANILLO</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="{{ route('welcome') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">Inicio</a>
                <a href="{{ route('course.index') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'course.index' ? 'active' : '' }}">Cursos</a>
                <a href="#" class="nav-item nav-link">Noticias</a>
                <a href="{{ route('gallery.index') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'gallery.index' ? 'active' : '' }}">Galería</a>
                <a href="#" class="nav-item nav-link">Tienda</a>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'contact.index' ? 'active' : '' }}">Contacto</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
