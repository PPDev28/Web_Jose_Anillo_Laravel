
window.addEventListener("scroll", function () {
    let currentScroll = window.scrollY || document.documentElement.scrollTop;
    let navbar = document.querySelector('.navbar');

    if (currentScroll > 0) {
        document.querySelector('.navbar').classList.remove('bg-navbarTransparent'); // Elimina la clase de color de fondo
        document.querySelector('.navbar').classList.add('bg-navbar'); // Agrega la clase de fondo transparente
        document.querySelector('.navbar').classList.remove('navbar-lg');
        document.querySelector('.navbar').classList.add('navbar-sm');
    } else {
        document.querySelector('.navbar').classList.remove('bg-navbar'); // Elimina la clase de fondo transparente
        document.querySelector('.navbar').classList.add('bg-navbarTransparent'); // Agrega la clase de color de fondo
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

