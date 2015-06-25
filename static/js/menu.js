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
        $(".upbutton").css("visibility", "hidden").fadeOut('slow');
    }

    });

    $(".upbutton").click(function(){
        $('html,body').animate({scrollTop: 0},'500','swing');
    });




    $('.article').click(function() {
        $('.article').removeClass('current');
        $('.description').hide();

        $(this).addClass('current');
        $(this).children('.description').show();
    });

    $(document).keypress(function(event) {
        switch (event.which){
            case 32:
                $('.description').hide();
                $('.current').children('.description').show();
            break
            case 83:
                var currentArticle = $('.current');
                var nextArticle = currentArticle.next();
                currentArticle.removeClass('current');
                nextArticle.addClass('current');
            break
            case 27:
                $('.description').hide();
            break
            case 87:
                var currentArticle = $('.current');
                var prevArticle = currentArticle.prev();
                currentArticle.removeClass('current');
                prevArticle.addClass('current');
            break
        }
    });
};

$(document).ready(main);