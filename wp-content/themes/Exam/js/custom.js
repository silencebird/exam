jQuery(document).ready(function ($) {
    $(window).load(function () {
        $('#flexslider1').flexslider({
            animation: "slide",
            slideshow: true,
            controlNav: false,
            directionNav: false,
            randomize: true
        });
    });
});


jQuery(document).ready(function ($)  {

    // store the slider in a local variable
    var $window = $(window),
        flexslider = { vars:{} };

    // tiny helper function to add breakpoints
    function getGridSize() {
        return (window.innerWidth < 720) ? 3 :
            (window.innerWidth < 1200) ? 5 : 6;
    }

    $window.load(function() {
        $('#flexslider2').flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 150,
            minItems: getGridSize(), // use function to pull in initial value
            maxItems: getGridSize(), // use function to pull in initial value
            start: function(slider){
                flexslider = slider;
            }
        });
    });
    $window.resize(function() {
        var gridSize = getGridSize();

        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
    });
});