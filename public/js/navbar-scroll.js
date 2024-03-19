

let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    let currentScroll = window.scrollY || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scrolling down
        document.querySelector('.navbar').style.top = "-60px"; // Oculta la barra de navegación al desplazarse hacia abajo
    } else {
        // Scrolling up
        document.querySelector('.navbar').style.top = "0"; // Muestra la barra de navegación al desplazarse hacia arriba
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});
