

window.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {

        let currentScroll = window.scrollY || document.documentElement.scrollTop;

        if (currentScroll > 1 && this.window.innerWidth > 768) {

            $('.header').addClass("scroll");

        } else {

            $('.header').removeClass("scroll"); 
        }

        if (currentScroll <= 0) {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    });
});