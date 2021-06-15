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

    $('#notificationbar #close-nb').click(function () {
        setTimeout(function () {
            $('#vue-app').css('margin-top', 0);
            setTimeout(function () {
                window.dispatchEvent(new Event('resize'));
                window.dispatchEvent(new Event('scroll'));
            }, 100);
        }, 200);
    });
});