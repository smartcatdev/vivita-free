jQuery( document ).ready( function( $ ){
 
    $( '#customize-control-vivita_theme_color_skin input[type=radio]' ).each( function() {

        var selector = $(this);

        if( selector.val()  === 'blueberry' ) {

//            selector.parent('label').append('<span class="theme-color" style="background: #1b2226;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #74c2c7;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #e91e63;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #57d2db;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #74c2c7;"></span>');

        }

        if( selector.val()  === 'lilac' ) {

//            selector.parent('label').append('<span class="theme-color" style="background: #272c35;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #7c67e4;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #00d4b0;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #00ffd5;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #90a2d5;"></span>');

        }

        if( selector.val()  === 'pumpkin-spice' ) {
            
//            selector.parent('label').append('<span class="theme-color" style="background: #2e261f;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #FFA019;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #ff9500;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #ffcc33;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #b89e7a;"></span>');

        }

        if( selector.val()  === 'freshwater' ) {
            
//            selector.parent('label').append('<span class="theme-color" style="background: #292c33;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #f7646b;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #f7646b;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #29D9C2;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #29D9C2;"></span>');
        }

        if( selector.val()  === 'wintergreen' ) {
            
//            selector.parent('label').append('<span class="theme-color" style="background: #153715;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #57db8e;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #a6e90c;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #a6e90c;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #57db8e;"></span>');

        }

        if( selector.val()  === 'autumn' ) {
            
//            selector.parent('label').append('<span class="theme-color" style="background: #153715;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #4d0d00;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #B64926;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #FFB03B;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #db9957;"></span>');

        }

        if( selector.val()  === 'jelly' ) {
             
//            selector.parent('label').append('<span class="theme-color" style="background: #153715;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #ca2b72;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #993366;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #4d1933;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #c24770;"></span>');

        }

        if( selector.val()  === 'shade' ) {
            
//            selector.parent('label').append('<span class="theme-color" style="background: #153715;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #1c1c1c;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #8c8c8c;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #cacaca;"></span>');
            selector.parent('label').append('<span class="theme-color" style="background: #3c3c3c;"></span>');

        }
        
    });
    
});
