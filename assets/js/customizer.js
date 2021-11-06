( function($){
    wp.customize( 'hero_sub_title', function( value ){
        value.bind( function( newvalue ){
            $('.header-content-right .sub-title').html( newvalue );
        });
    });

    wp.customize( 'hero_sub_title_color', function( value ){
        value.bind( function( newvalue ){
            $('.header-content-right .sub-title').css('color', newvalue );
        })
    });
} )(jQuery);