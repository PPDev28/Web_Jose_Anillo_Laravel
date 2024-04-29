function picShiffter() {
    let done = false;
    const pictures = document.querySelectorAll('.pic');

    pictures.forEach((pic, index, array) => {
        if (!done) {
            if (pic.classList.contains('visible')) {
                console.log('its work');
                pic.classList.remove('visible');
                array[(index + 1) % array.length].classList.add('visible');
                done = true;
            }
        }
    });
}

setInterval(picShiffter, 5000);
