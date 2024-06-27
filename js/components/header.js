$('.js-hamburger').click(() => {
    $('body').toggleClass('is-open');
    $('body').toggleClass('no-scroll');
});

$( window ).scroll( scroll, scroll() );

function scroll () {
    if ( $(window).scrollTop() >= 60 ){
        $('.header').addClass('header-fixed');
    } else {
        $('.header').removeClass('header-fixed');
    }
}


$(function () {
    $('.header__navigation li a').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });
});


$(window).bind('load', function() {
    $('.button__discover').click(function() {
        console.log(1);
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
            location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 75
                }, 1000);
            }
        }

        if( $( 'body' ).hasClass( 'is-open no-scroll' ) ) {
            $('.js-hamburger').click();
        }
    });
});