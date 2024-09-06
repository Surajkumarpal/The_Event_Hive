const sliders = document.querySelectorAll('.slider');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
let currentIndex = 0;

function showSlide(index) {
    sliders.forEach((slide, i) => {
        if (i === index) {
            slide.style.display = 'block';
        } else {
            slide.style.display = 'none';
        }
    });
}

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + sliders.length) % sliders.length;
    showSlide(currentIndex);
});

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % sliders.length;
    showSlide(currentIndex);
});

// Show the initial slide
showSlide(currentIndex);
