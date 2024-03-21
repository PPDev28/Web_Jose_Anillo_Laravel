
window.addEventListener("scroll", function () {
    let currentScroll = window.scrollY || document.documentElement.scrollTop;
    let navbar = document.querySelector('.navbar');

    if (currentScroll > 100) {
        document.querySelector('.navbar').classList.remove('bg-navbarTransparent');
        document.querySelector('.navbar').classList.add('bg-navbar');
        document.querySelector('.navbar').classList.remove('navbar-lg');
        document.querySelector('.navbar').classList.add('navbar-sm');
        document.querySelectorAll('.a-item').forEach(link => link.classList.add('black-text'));
        // document.querySelector('.navbar-brand img').src = "{{ asset('img/logoJose.png') }}";

    } else {
        document.querySelector('.navbar').classList.remove('bg-navbar');
        document.querySelector('.navbar').classList.add('bg-navbarTransparent');
        document.querySelector('.navbar').classList.remove('navbar-sm');
        document.querySelector('.navbar').classList.add('navbar-lg');
        document.querySelectorAll('.a-item').forEach(link => link.classList.remove('black-text'));
        // document.querySelector('.navbar-brand img').src = "{{ asset('img/logoJoseAnilloBlanco.png') }}";
    }

    if (currentScroll <= 0) {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
});

