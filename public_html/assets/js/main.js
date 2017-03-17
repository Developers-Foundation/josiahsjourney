
// The fractional vh size of the lander
var LANDER_HEIGHT = 0.3;


function scrollEvent(){
    var scroll = $(window).scrollTop();
    var landerHeight = document.documentElement.clientHeight * LANDER_HEIGHT;

    // If the scroll from the top is greater than the size of the navbar,
    // then we fix the navbar to the top, otherwise we want the navbar below the lander,
    if(scroll > landerHeight){
        $('#nav').addClass('navbar-fixed-top').css('padding', '1px');
        $('.spacer').css('margin-bottom', '120px');
        // $('#nav');
    }
    else{
        $('#nav').removeClass('navbar-fixed-top').css('padding', '2vh');
        $('.spacer').css('margin-bottom', '0');
    }
}


$(function jQueryScroll (){
    $(window).scroll(function() {
        scrollEvent();
    });
});

scrollEvent();