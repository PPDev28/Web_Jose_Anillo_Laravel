
window.addEventListener("DOMContentLoaded", function () {
    
    let carousel = document.getElementById('blog-carousel');

    // Verifica si el ancho de la ventana es menor que 1024 px
    if (window.innerWidth < 1024) {
        
        document.querySelector('.navbar').classList.add('navbar-mobile');
        carousel.style.marginTop = '100px'

    } else if (window.innerWidth >= 1024) {
        window.addEventListener("scroll", function () {
            let currentScroll = window.scrollY || document.documentElement.scrollTop;
            
            if (currentScroll > 100) {
                document.querySelector('.navbar').classList.remove('bg-navbarTransparent');
                document.querySelector('.navbar').classList.add('bg-navbar');
                document.querySelector('.navbar').classList.remove('navbar-lg');
                document.querySelector('.navbar').classList.add('navbar-sm');
            } else {
                document.querySelector('.navbar').classList.remove('bg-navbar');
                document.querySelector('.navbar').classList.add('bg-navbarTransparent');
                document.querySelector('.navbar').classList.remove('navbar-sm');
                document.querySelector('.navbar').classList.add('navbar-lg');
            }

            if (currentScroll <= 0) {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });
    }
});
