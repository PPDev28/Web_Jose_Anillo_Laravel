<!-- Site footer -->
<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-link mr-2" href="https://www.facebook.com/joseanillosalazar/?locale=es_ES" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-link mr-2" target="_blank" href="https://open.spotify.com/intl-es/artist/14jkAPjXRzlL89CjZedmhh"><i class="fa-brands fa-spotify"></i></a>
                    <a class="btn btn-lg btn-link mr-2" href="https://www.instagram.com/joseanillo.music/?hl=es" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-link" href="https://www.youtube.com/@JoseAnilloOficial" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <div class="custom-language-button">
                    @if(str_contains(request()->path(), 'en'))
                    <a class="btn btn-lg btn-link" href="{{ route('welcome') }}">Spanish</a>
                    @else
                    <a class="btn btn-lg btn-link" href="{{ route('welcome.index.en') }}">Inglés</a>
                    @endif
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
                    <a href="#">Jose's Company</a>.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 text-md-end">
                <img src="{{ asset('img/logo_CEB.jpg') }}" alt="logo CEB" class="ml-2" style="width: 50px; height: 50px;">
            </div>
        </div>
    </div>
</footer>

