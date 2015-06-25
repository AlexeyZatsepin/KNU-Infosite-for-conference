/**
 * Created by Alex on 2/8/15.
 */
var main = function()
{

    $('.icon-menu').click(function() {
        var menu=$('.menu');
        menu.animate({
            left: '0px'
        }, 200);


        $('body').animate({
            left: '285px'
        }, 200);
    });


    $('.icon-close').click(function() {
        var menu=$('.menu');
        menu.animate({
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


        $ ('#ava').each(function() {
            var elPosition = $(this).offset().top; 	// Position of the element
            var elHeight = $(this).height(); 		// Height of the element
            var windowTop = $(window).scrollTop(); 	// Top of the window
            var windowHeight = $(window).height(); 	// Height of the window
            if (elPosition < windowTop + windowHeight - elHeight) {
                $(this).addClass("animation turn-in-x");
            } 						                   // adds the class wheh the element is fully in the visible area of the window
            if (elPosition > windowTop + windowHeight) {
                $(this).removeClass("animation turn-in-x");
            } 						                   // removes the class when the element is not visible in the window
            if (elPosition + elHeight < windowTop) {
                $(this).removeClass("animation turn-in-x");
            } 						                   // removes the class when the element is not visible in the window
        });
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
    var currentArticle = $('.current');

    $(document).keypress(function(event) {
        switch (event.which){
            case 32:
                $('.description').hide();
                $('.current').children('.description').show();
            break;
            case 83:
                var nextArticle = currentArticle.next();
                currentArticle.removeClass('current');
                nextArticle.addClass('current');
            break;
            case 27:
                $('.description').hide();
            break;
            case 87:
                var prevArticle = currentArticle.prev();
                currentArticle.removeClass('current');
                prevArticle.addClass('current');
            break;
        }
    });
};

$(document).ready(main);