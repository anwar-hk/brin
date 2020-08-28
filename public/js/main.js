// attribute responsive

var resize = function () {
    var screenWidth = parseInt($('body').width()),
        mySlider = $(".rev-size");
        mySlider2 = $(".rev-size-2");
        mySlider3 = $(".rev-size-3");
        mySlider4 = $(".rev-size-4");
        mySlider5 = $(".rev-size-5");
        mySlider6 = $(".rev-size-6");
    if (screenWidth <  778) {
        mySlider.data('x', 'center');
        mySlider.data('y', '380');
        mySlider2.data('x', 'center');
        mySlider2.data('y', '480');
        mySlider3.data('x', 'center');
        mySlider3.data('y', '420');
        mySlider4.data('x', 'center');
        mySlider4.data('y', '500');
    }
    else if(screenWidth <  2000){
        mySlider.data('x', '740');
        mySlider.data('y', '475');
        mySlider2.data('x', '980'); 
        mySlider2.data('y', '475');
        mySlider3.data('x', '980'); 
        mySlider3.data('y', '535');
        mySlider4.data('x', '740');
        mySlider4.data('y', '535');
    }
}

$(window).resize(function () {
    resize();
});

$(document).ready(function () {
    resize();
});