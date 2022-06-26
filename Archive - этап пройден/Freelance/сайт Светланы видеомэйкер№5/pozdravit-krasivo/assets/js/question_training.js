$(function () {

    $('.plan__item-title').on('click', function () {
        $(this).toggleClass('plan__item-title--active');
        $(this).next().slideToggle();
        $(this).toggleToggle('active');
    });

});