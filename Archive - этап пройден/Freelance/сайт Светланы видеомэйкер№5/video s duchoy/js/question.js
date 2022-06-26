$(function () {

    $('.question__list-title').on('click', function () {
        $(this).toggleClass('question__list-title--active');
        $(this).next().slideToggle();
        $(this).toggleToggle('active');
    });

});