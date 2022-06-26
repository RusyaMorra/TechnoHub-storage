$(window).on("scroll", function () {
    var scrolled = $(this).scrollTop();
    if( scrolled >620 ) {
        $('body').addClass('ServiceScrollActive');
    }   
    if( scrolled <= 620 ) {     
        $('body').removeClass('ServiceScrollActive');
    }
});