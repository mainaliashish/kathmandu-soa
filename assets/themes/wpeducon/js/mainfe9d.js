/*global $:false */
jQuery(document).ready(function($){'use strict';

	/* -------------------------------------- */
	// 		RTL Support Visual Composer
	/* -------------------------------------- */	
	var delay = 100;
	function themeum_rtl() {
		if( jQuery("html").attr("dir") == 'rtl' ){
			var count = jQuery( ".entry-content > div.vc_row-fluid" ).length;
			if( count==1 ){
				if ( jQuery( ".entry-content > div.vc_row-fluid" ).attr( "data-vc-full-width" ) ) {
				    if( jQuery( ".entry-content > div.vc_row-fluid" ).data( "vc-full-width" ) === true ){
						jQuery( '.entry-content > div.vc_row-fluid' ).css({'left':'auto','right':jQuery('.entry-content > div.vc_row-fluid').css('left')});
					}
				}
			}else{
				for (var i = 0; i < count; ++i) {
					if ( jQuery( ".entry-content > div.vc_row-fluid" ).eq(i).attr( "data-vc-full-width" ) ) {
					    if( jQuery( ".entry-content > div.vc_row-fluid" ).eq(i).data( "vc-full-width" ) === true ){
							jQuery( '.entry-content > div.vc_row-fluid' ).eq(i).css({'left':'auto','right':jQuery('.entry-content > div.vc_row-fluid').eq(i).css('left')});	
						}
					}
				}
			}
		}
	}
	setTimeout( themeum_rtl , delay);

	jQuery( window ).resize(function() {
		setTimeout( themeum_rtl , 1);
	});	


	var sticky_holder = jQuery('<div class="sticky-holder"></div>'),
		masthead = jQuery('#masthead');
	// Sticky Nav
	jQuery(window).on('scroll', function(){'use strict';
		if ( jQuery(window).scrollTop() > 45 ) {

			if (!masthead.hasClass('sticky') && masthead.hasClass('sticky-enabled')) {
				masthead.addClass('sticky');
				sticky_holder.css({'height': masthead.outerHeight()});
				sticky_holder.insertAfter('#masthead');
			}
			
		} else {
			masthead.removeClass('sticky');

			sticky_holder.remove();
		}
	});
	// SOcial Share ADD
	$('.prettySocial').prettySocial();

	//comming soon
	if (typeof loopcounter !== 'undefined') {
		loopcounter('counter-class');
	}

	/* --------------------------------------
	*		Shortcode hover color effect 
	*  -------------------------------------- */

	//button shortcode
	var clr = '';
	var clr_bg = '';
	var clr_bc = '';
	$(".themeum-btn").on({
	    mouseenter: function () {
	     	clr = $(this).css('color');
			clr_bg = $(this).css('backgroundColor');
			clr_bc = $(this).css('border-color');
			$(this).css("color", $(this).data("hover-color"));
			$(this).css("background-color", $(this).data("hover-bg-color"));
			$(this).css("border-color", $(this).data("hover-border-color"));
	    },
	    mouseleave: function () {
	        $(this).css("color", clr );
			$(this).css("background-color", clr_bg );
			$(this).css("border-color", clr_bc );
	    }
	});

	//feature shortcode
	var clr = '';
	$(".feature-btn").on({
	    mouseenter: function () {
	     	clr = $(this).css('color');
			$(this).css("color", $(this).data("btn-hover-color"));
	    },
	    mouseleave: function () {
	        $(this).css("color", clr );
	    }
	});


	$('.event-register-btn-form, .event-contact-form-btn').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });


    var megamenu_fullwidth = function () {
    	var fullWidth = $(window).width();

    	$('.megamenu-container').each(function () {
    		var ulWidth = $(this).children().outerWidth(),
    			rightPos = 16;

    		rightPos += (fullWidth - ulWidth) / 2;

    		$('.megamenu-container').css({'width': fullWidth, 'right': '-'+(rightPos + parseInt(thm_edc.thm_mmc_right))+'px'});
    	});

    	
    }

    megamenu_fullwidth();

    $(window).on('resize', megamenu_fullwidth);


    $(".search-open-icon").on('click',function(e){
    	e.preventDefault();

    	$(".top-search-input-wrap, .top-search-overlay").fadeIn(200);
    	$(this).hide();
    	$('.search-close-icon').show().css('display','inline-block');
    });
    $(".search-close-icon, .top-search-overlay").on('click',function(e){
    	e.preventDefault();
    	
    	$(".top-search-input-wrap, .top-search-overlay").fadeOut(200);
    	$('.search-close-icon').hide();
    	$('.search-open-icon').show();
    });


    // Home Slider

    function doAnimations(elems) {
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
                    $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
    var $myCarousel = $('.home-two-crousel');
    var $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    $myCarousel.carousel();
    doAnimations($firstAnimatingElems);
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

});
