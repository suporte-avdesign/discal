(function($){

    "use strict";

    var themesEl1 = document.querySelector('[data-ref="container-1"]');
    var themesEl2 = document.querySelector('[data-ref="container-2"]');


    var config = {
        controls: {
            scope: 'local'
        }
    };

    var mixer1 = mixitup(themesEl1, config);
    var mixer2 = mixitup(themesEl2, config);

    jQuery( 'ul.post-category li:first-child' ).trigger( 'click' );

}(jQuery));