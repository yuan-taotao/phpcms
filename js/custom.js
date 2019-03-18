(function ($) {
    "use strict";

    //  Nav menu active
    $("#menuzord").menuzord({
        align: "right",
        effect: "fade",
        animation: "zoom-out"
    });

    //Owl carousel News Detail
    $('.news-detail-carosel').owlCarousel({
        autoPlay: false,
        pagination: true,
        navigation:false,
        items: 1,
        itemsDesktop: [1024, 1],
        itemsDesktopSmall: [768, 1],
        itemsTablet: [650, 1],
        itemsMobile: 1
    });

    //Owl carousel News Detail
    $('.most-project-carousel').owlCarousel({
        autoPlay: false,
        pagination: false,
        navigation:true,
        items: 4,
        itemsDesktop: [1024, 4],
        itemsDesktopSmall: [768, 3],
        itemsTablet: [650, 2],
        itemsMobile: 1,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });

    // who we work
    $('.who-we-are .all').owlCarousel({
        autoPlay: true,
        pagination: true,
        navigation:false,
        items: 1,
        itemsDesktop: [1024, 1],
        itemsDesktopSmall: [768, 1],
        itemsTablet: [650, 1],
        itemsMobile: 1,
    });

    //Owl carousel News Detail
    $('.home-work-carousel').owlCarousel({
        autoPlay: false,
        pagination: true,
        navigation:false,
        items: 4,
        itemsDesktop: [1024, 4],
        itemsDesktopSmall: [768, 1],
        itemsTablet: [650, 2],
        itemsMobile: 1
    });



    // loading script
    window.onload = (function(onload) {
        return function(event) {
            onload && onload(event);

            $(".loading-overlay .spinner").fadeOut(300),
                $(".loading-overlay").fadeOut(300);
                $("body").css({
                    overflow: "auto",
                    height: "auto",
                    position: "relative"
                })
        }
    }(window.onload));



})(jQuery);


