/**
 * Function of starting counter if it in view
 */
const ifCounterInViewOnce = () => {
    const counterWrapper = $('.counters__flex');
    const counterInView= ($('.counter:first-child').inView() && !(counterWrapper.hasClass('animate')));
    if (counterInView) {
        $('.countTo').countTo({
            speed: 800,
        });
        counterWrapper.addClass('animate');
    }
};

/**
 * Run the counter, if it exists on page
 */
if ($('.countTo').length !== 0) {
    $(window).scroll(ifCounterInViewOnce);
    ifCounterInViewOnce();
}