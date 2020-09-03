// attribute responsive

var resize = function () {
    var screenWidth = parseInt($('body').width()),
    // slide 1 office 
        mySlider = $(".rev-size");
        mySlider1 = $(".rev-size1");
    // slide 1 home
        mySlider2 = $(".rev-size2");
        mySlider02 = $(".rev-size02");

    if (screenWidth <  778) {
        // office
        // icons
        mySlider.data('hoffset', '-140');
        mySlider.data('voffset', '00');
        mySlider.data('x', 'center');
        mySlider.data('y', '200');
        // button
        mySlider1.data('hoffset', '-140');
        mySlider1.data('voffset', '0');
        mySlider1.data('x', 'center');
        mySlider1.data('y', '340');

        // home
        // icons
        mySlider2.data('hoffset', '120');
        mySlider2.data('voffset', '00');
        mySlider2.data('x', 'center');
        mySlider2.data('y', '200');
        // button
        mySlider02.data('hoffset', '120');
        mySlider02.data('voffset', '0');
        mySlider02.data('x', 'center');
        mySlider02.data('y', '340');
    }
    else if(screenWidth <  1040){
        // office
        mySlider.data('hoffset', '-140');
        mySlider.data('voffset', '00');
        mySlider.data('x', 'center');
        mySlider.data('y', '260');
        // button
        mySlider1.data('hoffset', '-140');
        mySlider1.data('voffset', '0');
        mySlider1.data('x', 'center');
        mySlider1.data('y', '390');

        // home
        // icons
        mySlider2.data('hoffset', '120');
        mySlider2.data('voffset', '00');
        mySlider2.data('x', 'center');
        mySlider2.data('y', '260');
        // button
        mySlider02.data('hoffset', '120');
        mySlider02.data('voffset', '0');
        mySlider02.data('x', 'center');
        mySlider02.data('y', '390');
    }
    else if(screenWidth <  2000){
        // office
        // icone
        mySlider.data('hoffset', '70');
        mySlider.data('voffset', '170');
        mySlider.data('x', '800');
        mySlider.data('y', '375');
        // button
        mySlider1.data('x', 'center');
        mySlider1.data('y', 'center');
        mySlider1.data('hoffset', '-130');
        mySlider1.data('voffset', '100');

        // home
        // button
        mySlider2.data('hoffset', '');
        mySlider2.data('voffset', '180');
        mySlider2.data('x', '1000');
        mySlider2.data('y', '375');
        // icone
        mySlider02.data('x', 'center');
        mySlider02.data('y', 'center');
        mySlider02.data('hoffset', '100');
        mySlider02.data('voffset', '100');
    
    }
}

$(window).resize(function () {
    resize();
});

$(document).ready(function () {
    resize();
});

// button routs