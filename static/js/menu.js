/**
 * Created by Alex on 2/8/15.
 */
var main = function()
{

    $('.icon-menu').click(function() {
        $('.menu').animate({
            left: '0px'
        }, 200);

        $('body').animate({
            left: '285px'
        }, 200);
    });


    $('.icon-close').click(function() {
        $('.menu').animate({
            left: '-285px'
        }, 200);
        $('body').animate({
            left: '0'
        }, 200);
    });

    $(window).scroll(function(){
    if ($(this).scrollTop()>100) {
        $(".upbutton").css("visibility", "visible").fadeIn('slow');
    }
    else {
        $(".upbutton").css("visibility", "hidden").fadeOut();
    }
    });

    $(".upbutton").click(function(){
        $('html,body').animate({scrollTop: 0},'500','swing');
    });
};

$(document).ready(main);