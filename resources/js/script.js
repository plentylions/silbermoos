$(function () {
    if (window.matchMedia('(max-width: 991.98px)').matches) {
        $('.arguments-slider').slick({
            vertical: true,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 300
        });
    }
});