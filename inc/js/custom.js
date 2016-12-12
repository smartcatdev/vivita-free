jQuery(function($) {

    /**
     * Initialize the slimScroll for the navigation menu overlay
     */
    $( function() {
        $( '#menu-overlay .inner nav' ).slimScroll({
            height: '400px',
            width: '350px',
            color: '#fff',
            size: '4px',
            railVisible: true,
            railColor: '#fff',
            railOpacity: 0.5,
        });
    });
    
    var vivita_carousel = $("#vivita-testimonials");
    vivita_carousel.owlCarousel({
        
        slideSpeed : 1000,
        paginationSpeed : 1000,
        singleItem: true,
        autoPlay : true

    });    

    /**
     * Initialize all Bootstrap tooltips
     */
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body',
        trigger: 'click hover'
    });

    /**
     * Main Navigation Click Tab Effect
     */
    var collapsed_nav   = true;
    
    $( '#primary-menu-toggle').click( function() {
      
        if ( collapsed_nav ) {
       
            $( '#menu-open' ).stop().fadeOut( 50, function() {
                $( '#menu-close' ).fadeIn( 200 );
            });
       
            $( '#menu-overlay-wrapper' ).stop().fadeIn( 400, function() {
                
            });
       
            collapsed_nav = false;
        
        } else {
            
            $( '#menu-close' ).stop().fadeOut( 50, function(){
                $( '#menu-open' ).fadeIn( 200 );
            });
       
            $( '#menu-overlay-wrapper' ).stop().fadeOut( 200, function() {
                
            });
        
            collapsed_nav = true;
            
        }
        
    });
    
    /**
     * Navigation Overlay - item hover effect
     */
//    var category_size = $( '.widget_categories ul li a').css( 'font-size' );
    
    $( '.main-navigation li > a').mouseenter( function() {
        
        $( this ).stop().animate({
            paddingTop: '4px',
            paddingBottom: '4px',
            letterSpacing: '.25em',
        }, 100 );
        
    }).mouseleave( function() {
       
        $( this ).stop().animate({
            paddingTop: '2px',
            paddingBottom: '2px',
            letterSpacing: '.2em',
        }, 200 );
        
    });
    
    /**
     * FAQs - Click/Expand Effect
     */
    var primary_color = $('#site-branding .site-tagline').css( 'color' ),
        default_text_color = '#333';
    
    $( '.single-faq').click( function() {
        
        var area_d = ( $(this).parent().parent().parent().parent().hasClass('area-d') ? true : false );
        
        if ( $(this).hasClass( 'expanded' ) ) {
            
            $( this ).find( '.faq-title' ).stop().animate({
                color: ( ( area_d ) ? '#fff' : default_text_color ),
            }, 400 );
            $( this ).find( 'i' ).fadeIn( 300 );
            
            $( this ).find( '.faq-content' ).stop().animate({
                color: '#fff',
                fontSize: '0',
                paddingTop: '0',
                paddingBottom: '0',
                borderTopWidth: '0',
                borderColor: '#fff',
            }, 400 );
            
            $(this).toggleClass('expanded');
            
        } else {
            
            $( this ).find( '.faq-title' ).stop().animate({
                color: ( ( area_d ) ? '#fff' : primary_color ),
            }, 200 );
            $( this ).find( 'i' ).fadeOut( 150 );
            
            $( this ).find( '.faq-content' ).stop().animate({
                color: ( ( area_d ) ? '#fff' : default_text_color ),
                fontSize: '18px',
                paddingTop: '15px',
                paddingBottom: '15px',
                borderTopWidth: '1px',
                borderColor: ( ( area_d ) ? '#fff' : primary_color ),
            }, 400 );
            $(this).toggleClass('expanded');
                
        }
        
    });
   
    /**
     * Contact Form
     */
    $('#vivita-contact-form').submit( function (e) {
       
        e.preventDefault();
        
        $('.mail-sent,.mail-not-sent').hide();
       
        var form = $(this);
        var name = $('.name.control', form ).val();
        var email = $('.email.control', form ).val();
        var message = $('textarea.message.control', form ).val();
        var recipient = $('.recipient', form ).val();
        var url = form.attr('action');
        
        if( name.length < 2 ) {
            alert( 'Please enter a name' );
            return false;
        }
        
        if( message.length < 2 ) {
            alert( 'Please enter a message' );
            return false;
        }
        
        if( ! vivitaValidateEmail( email ) ) {
            alert( 'Please enter a valid email address' );
            return false;
        }
        
        var data = {
            
            action : 'vivita_send_message',
            name : name,
            email : email,
            message : message,
            recipient : recipient
            
        }
        
        $.post( url, data, function ( response ) {
            
            console.log( response );
            
            if( response == 1 ) {
                $('.mail-sent').fadeIn(350);
                form[0].reset();
            }else{
                $('.mail-not-sent').fadeIn(350);
            }
            
        });
        
        
    });
    
    function vivitaValidateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
           
});