
// The fractional vh size of the lander
var LANDER_HEIGHT = 0.3;
var MONEY_RAISED = 183732;




/**********************************************SCROLL******************************************************************/

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

/**********************************************      ******************************************************************/

















/**********************************************JQUERY******************************************************************/

$(function () {

    $('.count').each(function () {
        $(this).prop('total',0).animate({
            total: MONEY_RAISED
        }, {
            duration: 4500,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });




});
