//= include plugins/*

$(document).ready(() => {
    //= include components/helpers.js
    //= include components/header.js


    // let isAnimating = false,
    //     newLocation = '',
    //     firstLoad = false;


    // function changePage(url, bool) {
    //     isAnimating = true;
    //     $('body').addClass('page-is-changing');
    //     $('.cd-loading-bar').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    //         loadNewContent(url, bool);
    //         newLocation = url;
    //         $('.cd-loading-bar').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
    //     });
    //     //if browser doesn't support CSS transitions
    //     if( !transitionsSupported() ) {
    //         loadNewContent(url, bool);
    //         newLocation = url;
    //     }
    // }

    // function loadNewContent(url, bool) {
    //     console.log(url);
    //     url = ('' == url) ? '' : url;
    //     let pathToSection;
    //     pathToSection = ('projects' == url) ? 'category.php' : `./pages/page-${url}.php`;
    //     pathToSection = ('' == url) ? './wp-content/themes/Sfera/pages/page-front.php' : `./wp-content/themes/Sfera/pages/page-${url}.php`;
    //     let section = $(`<div class="cd-main-content cd-${url}"></div>`);
    //     console.log(pathToSection);
        
    //     $('#main').load(`${pathToSection}`, function(event){
    //     // load new content and replace <main> content with the new one
    //     // let section = $(`<div class="cd-main-content cd-${url}">${event}</div>`);
    //         console.log(event);
    //         $('main').html(event);
    //         //if browser doesn't support CSS transitions - dont wait for the end of transitions
    //         var delay = ( transitionsSupported() ) ? 1200 : 0;
    //         setTimeout(function(){
    //             //wait for the end of the transition on the loading bar before revealing the new content
    //             ( section.hasClass(`cd-${url}`) ) ? $('body').addClass(`cd-${url}`) : $('body').removeClass(`cd-${url}`);
    //             $('body').removeClass('page-is-changing');
    //             $('.cd-loading-bar').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    //                 isAnimating = false;
    //                 $('.cd-loading-bar').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
    //             });
    
    //             if( !transitionsSupported() ) isAnimating = false;
    //         }, delay);
        
    //         if(url!=window.location && bool){
    //             //add the new page to the window.history
    //             //if the new page was triggered by a 'popstate' event, don't add it
    //             window.history.pushState({path: url},'',url);
    //         }
    //     });
    // }
    
    function transitionsSupported() {
        return $('html').hasClass('csstransitions');
    }


});


function fadeInPage() {
    if (!window.AnimationEvent) { return; }
    var fader = document.querySelector('main');
    fader.classList.add('fade-out');
}


document.addEventListener('DOMContentLoaded', function() {
    if (!window.AnimationEvent) { return; }
    const anchors = document.querySelectorAll('.navigation__list a');
        
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
            
        // fader.classList.add('fade-in');
    });
    });
});

// fadeInPage();


window.addEventListener('pageshow', function (event) {
    if (!event.persisted) {
        return;
    }
    var fader = document.querySelector('main');
    fader.classList.remove('fade-in');
});

