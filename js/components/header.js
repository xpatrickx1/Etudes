$('.js-hamburger').click(() => {
    $('body').toggleClass('is-open');
    $('body').toggleClass('no-scroll');
});


$('.navigation__drop-btn > span').click(function () {
    if($(window).width() < 992){
        $(this).parent().toggleClass('drop-is-open');
    }
});

$(window).bind('load', function() {
    $('.navigation__list li a').click(function() {

        if( $( 'body' ).hasClass( 'is-open no-scroll' ) ) {
            $('.js-hamburger').click();
        }
    });
});
