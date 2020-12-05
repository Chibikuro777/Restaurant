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
    var scrollUp = $('.scroll-up');
    scrollUp.hide();
    //スクロールしてページトップから100に達したらボタンを表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
            scrollUp.fadeIn();
        } else {
            scrollUp.fadeOut();
        }
    });
    //スクロールしてトップへ戻る
    scrollUp.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});


