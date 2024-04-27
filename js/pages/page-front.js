$(document).ready(() => {
    //= include ../components/timer.js
    //= include ../components/video.js

    setTimeout(() => {
        $('.preloader').remove();
    }, 4000);
});