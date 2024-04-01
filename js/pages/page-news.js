$('.news .news__accordion').not(':first').hide();


// --close all accordion items --
$('.news .news__accordion').each(function () {
    $('.news__item').each(function (index) {
        // if(index!==0) {
        $('.item__description').slideUp();
        // }
    });
});


// // --open first item in each accordion--
// $('.news .news__accordion').each(function () {
//     const $newsFirstTab = $('.news__item', this).first();
//     $newsFirstTab.addClass( 'currentFaq' );
//     $newsFirstTab.find('.item__description').slideDown();
//     $newsFirstTab.find('.item__close').addClass('active');
//     $newsFirstTab.find('.item__title').addClass('active');
// });

function openAccordionItem(el) {
    el.addClass('currentFaq');
    el.find('.item__description').slideDown();
    el.find('.item__close').addClass('active');
    el.find('.item__title').addClass('active');
}

function closeAccordionItem(el) {
    el.removeClass('currentFaq');
    el.find('.item__description').slideUp();
    el.find('.item__close').removeClass('active');
    el.find('.item__title').removeClass('active');
}


$('.news__item').on('click', function(el){
    let accordion =  $(this).parent('.news__accordion');
    if (accordion) {
        if ($(this).hasClass('currentFaq')) {
            closeAccordionItem($(this));
            return;
        }
        accordion.children().each(function () {
            if($(this).hasClass('currentFaq')){
                closeAccordionItem($(this));
            }
        });

        openAccordionItem($(this));
    }
});


