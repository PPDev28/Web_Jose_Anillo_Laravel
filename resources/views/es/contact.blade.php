<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacto | Jose Anillo</title>
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

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
@include('es/new-navbar')

@include('header', ['parent' => 'contact'])

<!-- Contact Us Section -->
<section class="Material-contact-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12" data-wow-delay=".2s">
                <h1 class="section-title">Contacta con José Anillo</h1>
            </div>
        </div>
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>Contacta con José Anillo para obtener más información acerca de cursos, contrataciones, etc.</p>
                <div class="find-widget">
                    <b>Empresa</b>:  CEB Productions, LLC
                </div>
                <div class="find-widget">
                    <b>Email</b>: contacto@joseanillo.com
                </div>
                <div class="find-widget">
                    <b>Departamento de Producción y contratación de artistas</b>: produccion@trafalgarcinema.com
                </div>
                <div class="find-widget">
                    <b>Juan Manuel Roa</b>: +34 674 005 071
                </div>
                <div class="find-widget">
                    <b>David Zamora</b>: +34 675 129 696
                </div>
            </div>
            <!-- contact form -->
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator" action="{{ route('email.index') }}">
                    @csrf
                    <!-- Name -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Nombre</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Por favor, ingresa tu nombre">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Por favor, ingresa tu email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                        <label class="control-label">Asunto</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Por favor, ingresa el asunto">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Mensaje</label>
                        <textarea class="form-control" rows="3" id="message" name="message" required data-error="Escribe el mensaje"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-5">
                        <button class="btn" style="background-color: white; color: black;" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i>Enviar email</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('footer2')
</body>
