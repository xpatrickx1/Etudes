//= include ../components/timer.js

$(window).on('load', function() { 
    $('#status').fadeOut(); 
    $('#preloader').delay(4000).fadeOut('slow');
    $('body').delay(4000).css({'overflow':'visible'});
});