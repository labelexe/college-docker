const articleSlider = new Swiper('#article_slider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    draggable: true,
    edgeSwipeDetection: true,
    speed: 1800,
    mousewheel: {
        invert: true,
    },
    centeredSlides: true,
    slidesPerView: 'auto',
    spaceBetween: 30,
    setWrapperSize: true,

    // Navigation arrows
    navigation: {
        nextEl: '.site_main__news_content_wrap_navigation_slider__right',
        prevEl: '.site_main__news_content_wrap_navigation_slider__left',
    },

    autoplay: {
        delay: 8000,
    },

    resizeObserver: true,

    // calculateHeight: true,

    slideActiveClass: '__active',

    autoHeight: true,

    grabCursor: true,

    slideToClickedSlide: true,
    watchOverflow: true

    // freeMode: true


});

