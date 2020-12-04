const { functionsIn } = require("lodash");

$(function () {
    $('.hamburger').click(function () {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});

$(function () {
    let button = $('#scroll-button').offset();
    if ($(window).offset().top >= button.top) {
        console.log('ok');
        $('.scroll-up').addClass('scroll-active');
        $('.scroll-up').click(function () {
            $(window).scrollTop();
        });
    }
});


