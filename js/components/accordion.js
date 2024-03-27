const accordionHandler = e => {
    const $header = $(e.target).closest('[data-accordion=header]');
    if ($header.length) {
        $header.toggleClass('open').next('[data-accordion=body]').not(':animated').slideToggle();
    }
};

$('[data-accordion=container]').on('click', accordionHandler);

$('[data-accordion=header]').each(function (index) {
    if(index!==0){
        $(this).toggleClass('open').next('[data-accordion=body]').slideToggle(0);
    }
});