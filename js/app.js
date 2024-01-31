document.addEventListener("DOMContentLoaded", function () {
    // Первый свайпер (без стрелок)
    new Swiper('.image-slider', {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        autoplay: {
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: null,
            prevEl: null,
        },
    });

    // Второй свайпер (со стрелками)
    new Swiper('.news-image-slider', {
        slidesPerView: 3,
        centeredSlides: true,
        simulateTouch: false, 
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});