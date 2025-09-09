jQuery.noConflict();
(function($) {
    // Теперь $ доступен
    $(function() {
        console.log('jQuery works!');
    });
})(jQuery);


/*
jQuery(document).ready(function($) {
    $('.owl-recent-works').owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            992: { items: 3 }
        }
    });
});*/