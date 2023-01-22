jQuery(function($) {
  
  var pluginUrl   = $('.style-chooser').data('pluginurl');
  var themeUrl    = $('.style-chooser').data('stylesheeturl');
  var stylesheet  = $('.style-chooser').data('stylesheet');
  var patterns    = $('.style-chooser ul.patterns li');
  var bgimages    = $('.style-chooser ul.bgimages li');
  var presets     = $('.preset ul li');
  var presetLink  = $('<link rel="stylesheet" id="preset-css"  href="" type="text/css" />');


  $('head').append(presetLink);


  //Minicolor
  $('.color-picker').minicolors({
    control: $(this).attr('data-control') || 'hue',
    defaultValue: $(this).attr('data-defaultValue') || '',
    inline: $(this).attr('data-inline') === 'true',
    letterCase: $(this).attr('data-letterCase') || 'lowercase',
    opacity: $(this).attr('data-opacity'),
    position: $(this).attr('data-position') || 'bottom left',
    change: function(hex, opacity) {
      if( !hex ) return;
      if( opacity ) hex += ', ' + opacity;
      if( typeof console === 'object' ) {

        $('.boxwidth-bg').removeAttr('style').css({
          'background-color': hex,
          'background-image': 'none',
          'background-repeat': 'repeat',
          'background-attachment': 'inherit',
          'background-size': 'inherit'
        });
    //    console.log(hex);
      }
    },
    theme: 'bootstrap'
  });

  //Toggle
  $('.style-chooser .toggler').on('click', function(event){
    event.preventDefault();
    $(this).closest('.style-chooser').toggleClass('opened');
  });



  //Change layout
  $('.select-layout').on('change', function() {

    if($(this).val()=='boxed') {
      $('body').addClass('boxwidth-bg');
      $('#page').addClass('boxwidth');
    } else {
      $('body').removeClass('boxwidth-bg').removeAttr('style');
      $('#page').removeClass('boxwidth');
    }

    $(window).trigger('resize');

  });

  //Change Patterns
  $('.style-chooser ul.patterns li a').on('click', function(event){
    event.preventDefault();
    var currentPattern = $(this).parent().data('pattern');
    patterns.removeClass('active');
    $(this).parent().addClass('active');
    $('.boxwidth-bg').removeAttr('style').css({
      'background-image': 'url('+ pluginUrl +'/assets/images/patterns/'+ currentPattern +'.png)',
      'background-repeat': 'repeat',
      'background-attachment': 'inherit',
      'background-size': 'inherit'
    });
  });

  //Change Background Image
  $('.style-chooser ul.bgimages li a').on('click', function(event){
    event.preventDefault();
    var currentImage = $(this).parent().data('bgimage');
    bgimages.removeClass('active');
    $(this).parent().addClass('active');
    $('.boxwidth-bg').removeAttr('style').css({
        'background-image': 'url('+ pluginUrl +'/assets/images/bgimages/'+ currentImage +')',
        'background-repeat': 'no-repeat',
        'background-attachment': 'fixed',
        'background-position': '0% 100%',
        'background-size': 'cover'
    });
  });

  // change peset
  $('.style-chooser ul.presets li a').on('click', function(event){
    event.preventDefault();
    var currentPreset = $(this).parent().data('preset');
    // console.log($('#themeum-preset-css').attr('href'));
    //$.cookie(stylesheet, currentPreset, { expires : 1 });
    $('.style-chooser ul.presets li').removeClass('active');
    $(this).parent().addClass('active');
    presetLink.removeAttr('href').attr('href', pluginUrl + '/presets/' + currentPreset + '.css');
    // $('#quick-preset-css').removeAttr('href').attr('href', pluginUrl + '/presets/' + currentPreset + '.css');
  });


  //reset
  $('.style-chooser .btn-reset').on('click', function(event){
    event.preventDefault();
    $('body').removeClass('boxwidth-bg').removeAttr('style');
    $('#page').removeClass('boxwidth');
    $('.style-chooser ul.presets li').removeClass('active');
    $('.style-chooser ul.presets li.preset1').addClass('active');
    presetLink.removeAttr('href');
    $(window).trigger('resize');
  });

});