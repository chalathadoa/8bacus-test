document.getElementById('next').addEventListener('click', nextSlide);
document.getElementById('prev').addEventListener('click', prevSlide);
const sliders = document.querySelectorAll('.sliders');
let currentSlide = 0;

showSlide(currentSlide);

function showSlide(index) {
    sliders.forEach((slider) => {
        slider.style.display = 'none';
    });
    sliders[index].style.display = 'block';
}

function nextSlide() {
    currentSlide++;
    if (currentSlide >= sliders.length) {
        currentSlide = 0;
    }
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide--;
    if (currentSlide < 0) {
        currentSlide = sliders.length - 1;
    }
    showSlide(currentSlide);
}

function autoSlide() {
    currentSlide++;
    if (currentSlide >= sliders.length) {
        currentSlide = 0;
    }
    showSlide(currentSlide);
}

setInterval(autoSlide, 5000);