jQuery(function($){

'use strict';


    /* ---------------------------------------------- /*
     * Countdown
    /* ---------------------------------------------- */
        $('.countdown[data-countdown]').each(function () {

            var $this = $(this),
                finalDate = $(this).data('countdown');

            $this.countdown(finalDate, function (event) {
                $this.html(event.strftime(
                    '<div><div class="days"><span >%-D</span><span>Day%!d</span></div><div class="hours"><span>%H</span><span>Hours</span></div></div><div class="tk-countdown-ms"><div class="minutes"><span>%M</span><span>Minutes</span></div><div class="seconds"><span >%S</span><span>Seconds</span></div></div>'
                ));
            });
        });




    /* ---------------------------------------------- /*
     * Preloader
    /* ---------------------------------------------- */
    
    (function () {
        $(window).load(function() {
            $('#pre-status').fadeOut();
            $('#st-preloader').delay(350).fadeOut('slow');
        });
    }());



    /* ---------------------------------------------- /*
     * Full Screen
     /* ---------------------------------------------- */
    // Fullscreen Elements
    function getWindowWidth() {
        return Math.max( $(window).width(), window.innerWidth);
    }

    function getWindowHeight() {
        return Math.max( $(window).height(), window.innerHeight);
    }

    function fullscreenElements() {
        $('header#home-page').each(function(){
            $(this).css('min-height', getWindowHeight());
            $(this).css('min-width', getWindowWidth());
        });
    }
    fullscreenElements();



	
});



