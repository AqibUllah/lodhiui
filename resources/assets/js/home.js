
const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
// init Swiper:
new Swiper('.cube-swiper', {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable:true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    effect: 'cube',
    grabCursor: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
    }

});
