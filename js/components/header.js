$('.js-hamburger').click(() => {
    $('body').toggleClass('is-open');
    $('html').toggleClass('no-scroll');
});

$('.navigation__drop-btn > span').click(function () {
    if($(window).width() < 992){
        $(this).parent().toggleClass('drop-is-open');
    }
});