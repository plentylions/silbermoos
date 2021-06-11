$(function () {
    if (window.matchMedia('(max-width: 991.98px)').matches) {
        $('.arguments-slider').slick({
            vertical: true,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 300,
            dots: false,
            arrows: false
        });
    }
});