//= include plugins/*
//= include components/header.js

function fadeInPage() {
    if (!window.AnimationEvent) { return; }
    var fader = document.querySelector('main');
    fader.classList.add('fade-out');
}

document.addEventListener('DOMContentLoaded', function() {
    if (!window.AnimationEvent) { return; }
    const anchors = document.querySelectorAll('.navigation__list a, .cd-about a');
    console.log(anchors);
    anchors.forEach( (i) => {i.addEventListener('click', function(event) {
        fadeInPage();
        const fader = document.querySelector('main'),
            anchor = event.currentTarget;
            
        const listener = function() {
            window.location = anchor.href;
            fader.removeEventListener('animationend', listener);
        };
            
        fader.addEventListener('animationend', listener);
            
        event.preventDefault();
            
    });
    });
});


window.addEventListener('pageshow', function (event) {
    if (!event.persisted) {
        return;
    }
    var fader = document.querySelector('main');
    fader.classList.remove('fade-in');
});