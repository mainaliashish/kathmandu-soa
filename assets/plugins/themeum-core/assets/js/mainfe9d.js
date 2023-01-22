/*
 * Plugin Name: Themeum Core
 * Plugin URI: http://www.themeum.com/item/core
 * Author: Themeum
 * Author URI: http://www.themeum.com
 * License - GNU/GPL V2 or Later
 * Description: Themeum Core is a required plugin for this theme.
 * Version: 1.0
 */

jQuery(document).ready(function ($) {
    'use strict';

    // Themeum Video Popup
    if ($("#videoPlay,.popup-video").length > 0) {
        $("#videoPlay,.popup-video").magnificPopup({
        	disableOn: 700,
    			type: 'iframe',
    			mainClass: 'mfp-fade',
    			removalDelay: 160,
    			preloader: false,
    			fixedContentPos: false
        });
    }


    //  Gallery Image Popup
    $('.plus-icon').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function (openerElement) {
                return openerElement.next('img') ? openerElement : openerElement.find('img');
            }
        },
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        }

    });

    //Animated Number
    $('.themeum-counter-number').each(function () {
        var $this = $(this);
        $({Counter: 0}).animate({Counter: $this.data('digit')}, {
            duration: $this.data('duration'),
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });

    var $featurecourse = $('.themeum-feature-course');
    var $testicount  = $featurecourse.data('number');
    var $testiautoplay  = $featurecourse.data('aplay');
    var $testnav  = $featurecourse.data('testnav');
    $featurecourse.owlCarousel({
       loop:true,
       dots:false,
       nav:true,
       margin:30,
       rtl:false,
       autoplay:$testiautoplay,
       autoplayTimeout:3000,
       autoplayHoverPause:true,
       autoHeight: false,
       smartSpeed:400,
       nav:$testnav,
       navText: ['<i class="fa fa-angle-left">','<i class="fa fa-angle-right">'],
       lazyLoad:false,
       responsive:{
           0:{
               items:1
           },
           600:{
               items:1
           },
           1000:{
               items: $testicount,
           }
       },
       onInitialized: function() {
           $('.owl-item.active').first().addClass('last-owl-active-item');
       }
   });

    $featurecourse.on('translated.owl.carousel', function (event) {
        $(event.target).find('.last-owl-active-item').removeClass('last-owl-active-item');
        $(event.target).find('.active').first().addClass('last-owl-active-item');
    });    

    //latest carosuel
    var $latestcourse = $('.themeum-latest-course');
    var $latestcount  = $latestcourse.data('number');
    var $latestautoplay  = $latestcourse.data('aplay');
    var $testnav  = $latestcourse.data('testnav');
    $latestcourse.owlCarousel({
       loop:true,
       dots:false,
       nav:true,
       margin:30,
       rtl:false,
       autoplay:$latestautoplay,
       autoplayTimeout:3000,
       autoplayHoverPause:true,
       autoHeight: false,
       smartSpeed:400,
       nav:$testnav,
       navText: ['<i class="fa fa-angle-left">','<i class="fa fa-angle-right">'],
       lazyLoad:false,
       responsive:{
           0:{
               items:1
           },
           600:{
               items:1
           },
           1000:{
               items: $latestcount,
           }
       },
       onInitialized: function() {
           $('.owl-item.active').first().addClass('last-owl-active-item');
       }
   });

    $latestcourse.on('translated.owl.carousel', function (event) {
        console.log(event);
        $(event.target).find('.last-owl-active-item').removeClass('last-owl-active-item');
        $(event.target).find('.active').first().addClass('last-owl-active-item');
    });



    $('.themeum-twitter').owlCarousel({
       items: 1,
       loop:true,
       dots:true,
       nav:false,
       margin:30,
       rtl:false,
       autoplay:$latestautoplay,
       autoplayTimeout:3000,
       autoplayHoverPause:true,
       autoHeight: false,
       smartSpeed:400,
       nav:$testnav,
       navText: ['<i class="fa fa-angle-left">','<i class="fa fa-angle-right">'],
       lazyLoad:false,
   });


});