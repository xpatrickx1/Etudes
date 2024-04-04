$('.news .news__accordion').not(':first').hide();

$('.news .news__accordion').each(function () {
    $('.news__item').each(function (index) {
        $('.item__description').slideUp();
    });
});

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


