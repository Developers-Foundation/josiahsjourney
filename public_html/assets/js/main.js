


function scrollEvent(){
    var scroll = $(window).scrollTop();
    var landerHeight = document.documentElement.clientHeight * 0.3;

    if(scroll > landerHeight){
        $('#nav').addClass('navbar-fixed-top')
    }
    else{
        $('#nav').removeClass('navbar-fixed-top')
    }
}


$(function jQueryScroll (){
    $(window).scroll(function() {
        scrollEvent();
    });
});

scrollEvent();