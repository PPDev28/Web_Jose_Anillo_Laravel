document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.button-navbar');
    const nav = document.querySelector('.new-navbar');

    button.addEventListener('click', () => {
        nav.classList.toggle('activo');
    });
});
