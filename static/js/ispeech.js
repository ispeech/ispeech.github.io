 var ISPEECH = ISPEECH || {};

(function() {

    ISPEECH.namespace = function(ns_string) {
        var parts = ns_string.split('.'),
            parent = ISPEECH,
            i;

        if (parts[0] === "ISPEECH") {
            parts = parts.slice(1);
        }

        // typeof return string
        for (var i = 0; i < parts.length; i++) {
            if (typeof parent[parts[i]] === 'undefined') {
                parent[parts[i]] = {};
            }

            parent = parent[parts[i]];
        }

        return parent
    }

    ISPEECH.namespace('ISPEECH.utils.demo');

    ISPEECH.env = {
        width: document.documentElement.clientWidth,
        height: document.documentElement.clientHeight,
        fixTop: $('.fix-section') ? 0 : $('.fix-section').offset().top,
        login: {
            status: true,
            userName: 'Wei Chen'
        }
    }

    ISPEECH.utils = {
        demo: (function(argument) {
            var privateNum = 2;
            return {
                method: function function_name(argument) {
                    // body...
                }
            }
            // body...
        })(),

        calculateFixWidth: function(nowWidth){
            var width;

            if(nowWidth <= 1170){
                width = 362;
            }else{
                width = 445;
            }

            return width
        }
    }

    ISPEECH.event = {


        screenWidth: function(){
            var $win = $(window),
                $layoutChange = $('.layout-change'),
                $imgResponsive = $('.img-responsive'),
                screenWidth = $win.width(),
                scollbarWidth = 15;
                mobile = 768 - scollbarWidth,
                verticalAlignMiddle = ($('.author').height() - $imgResponsive.height())/2;

            if(screenWidth >= mobile){
                $imgResponsive.css('margin-top',verticalAlignMiddle);
            }else{
                $imgResponsive.attr('style','');
            }
        },

        scrollEvent: function(){

            var $win = $(window),
                $fix = $('.fix-section'),
                maxHeight = document.body.scrollHeight - 1000,
                screenWidth = $win.width(),
                scrollY = $win.scrollTop(),
                minHeight = ISPEECH.env.fixTop - 100;

            if(screenWidth > 980){
                if(minHeight <= scrollY && scrollY <= maxHeight){
                    $fix.addClass('fixed').css('width',ISPEECH.utils.calculateFixWidth(screenWidth));
                }else{
                    $fix.removeClass('fixed').attr('style','');
                }
            }

        },

        clickMenu: function(){
            $('.menu').toggle()
        }

    }

})(this)

$('#show_side_menu,.navbar-toggle').on('click',function(){
    $('body').addClass("sidemenu_visible");
});

$('#sidenav_close,.container').on('click',function(){
    $('body').removeClass("sidemenu_visible");
});

$('.sticky-wrapper').waypoint('sticky');

$(window).on({
    load: ISPEECH.event.screenWidth,
    resize: ISPEECH.event.screenWidth,
    scroll: ISPEECH.event.scrollEvent
});

// $('#loading-example-btn').click(function () {
// var btn = $(this)
// btn.button('loading')
// $.ajax(...).always(function () {
//   btn.button('reset')
// });
// });