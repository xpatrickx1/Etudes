window.addEventListener('DOMContentLoaded',  () => {
    const customOrder = document.querySelector('[data-crm-widget=form]');
    if(customOrder){
        customOrder.addEventListener('ready', function () {
            $('.order-preloader').remove();
        });
    }
});