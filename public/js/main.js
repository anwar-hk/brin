// attribute responsive

var resize = function () {
    var screenWidth = parseInt($('body').width()),
        mySlider = $(".rev-size");
        mySlider2 = $(".rev-size-2");
    if (screenWidth <  778) {
        mySlider.data('x', 'center');
        mySlider.data('y', '380');
        mySlider2.data('x', 'center');
        mySlider2.data('y', '480');
    }
    else if(screenWidth <  2000){
        mySlider2.data('y', '475');
        mySlider2.data('x', '980'); 
        mySlider.data('y', '475');
        mySlider.data('x', '740');
    }
}

$(window).resize(function () {
    resize();
});

$(document).ready(function () {
    resize();
});