$('.video__sound').click(function(){
    if($('.video video')[0].muted){
        $('.video video')[0].muted = false;
        $(this).addClass('active');
    }   
    else{
        $('.video video')[0].muted = true;
        $(this).removeClass('active');
    }   
});