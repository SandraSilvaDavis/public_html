const navElement = document.querySelector('#theNav');
const btnElement = document.querySelector('#theButton');

btnElement.addEventListener('click', () => {
    btnElement.classList.toggle('open');
    navElement.classList.toggle('open');
});

//SWIPER STUFF HERE
const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 3000, // Delay between slides in milliseconds
        disableOnInteraction: false, // Continue autoplay after interaction
    },
    speed: 1000, // Transition speed in milliseconds
    loop: true, // Enable looping
    effect: 'cube', // Use cube effect
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    pagination: {
        el: '.swiper-pagination', // Enable pagination
        clickable: true, // Make pagination dots clickable
    },
});
