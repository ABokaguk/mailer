document.addEventListener('DOMContentLoaded', function () {
    var declarationSwiper = new Swiper('.declaration-swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.declaration-next',
            prevEl: '.declaration-prev'
        },
    });

    var rightsSwiper = new Swiper('.rights-swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.rights-next',
            prevEl: '.rights-prev'
        },
    });


    var patentSwiper = new Swiper('.patent-swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.patent-next',
            prevEl: '.patent-prev'
        },
    
    });

    var anotherSwiper = new Swiper('.another-swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.another-next',
            prevEl: '.another-prev'
        },
    });
});