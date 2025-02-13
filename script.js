document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');
    const menuItems = menu.querySelectorAll('li');

    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('active');
    });

    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                this.classList.toggle('active');
            }
        });
    });
});

document.addEventListener("click", function (event) {
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');

    if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
        menu.classList.remove("active");
    }
});


let slideIndex = 1;
let slideInterval;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

// Auto slide
function startSlideShow() {
    slideInterval = setInterval(function() {
        plusSlides(1);
    }, 5000); // Change image every 5 seconds
}

startSlideShow();

// Swipe functionality
let touchstartX = 0;
let touchendX = 0;

const slider = document.querySelector('.slideshow');

function handleGesture() {
    if (touchendX < touchstartX) plusSlides(1);
    if (touchendX > touchstartX) plusSlides(-1);
}

slider.addEventListener('touchstart', e => {
    touchstartX = e.changedTouches[0].screenX;
});

slider.addEventListener('touchend', e => {
    touchendX = e.changedTouches[0].screenX;
    handleGesture();
});

// Pause auto slide on hover
slider.addEventListener('mouseover', () => {
    clearInterval(slideInterval);
});

slider.addEventListener('mouseout', () => {
    startSlideShow();
});
