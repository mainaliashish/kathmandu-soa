<?php 
if(!empty($ban)){
        if($ban['8']['banner_of']==='contactus'){
            $b = base_url().'uploads/banner/'.$ban['8']['banner_name'];
        }
    }

if(!empty($contact_info)){
    $university_name = $contact_info['0']['university_name'];
    $full_location = $contact_info['0']['full_location'];
    $pos_box_num = $contact_info['0']['post_box_num'];
    $con1 = $contact_info['0']['contact_information1'];
    $cont2 = $contact_info['0']['contact_information2'];
    $web_link = $contact_info['0']['web_site_link'];
    // $banner = base_url().'uploads/'.$contact_info['0']['banner'];

}else{
    $university_name = '';
    $full_location = '';
    $pos_box_num = '';
    $con1 = '';
    $cont2 = '';
    $web_link ='';
    $banner = '';
}
?>

  <style id='wpeducon-style-inline-css' type='text/css'>
      .visitors-query p{
  text-align: center;
    font-size: 70px;
    color: #0a8d0a;
}
.visitors-query h4, .visitors-query h5{
  text-align: center;
    color: #43aa43;
}
  .vc_custom_1490339153567 {
    margin-bottom: 50px !important;
}
.vc_custom_1490339159711 {
    margin-bottom: 80px !important;
}
 .contact-form-wrapper-map h3,.contact-form-wrapper h2{
      padding-top: 25px;
}
    a,
    .bottom-widget .contact-info i,
    .themeum-topstories-item .entry-date,
    .shortcode-upcoming-event .upcoming-event-content i,
    .notice-list-meta-date,
    .package-sidebar a:hover,
    .themeum-notice-list .thm-notice-data .notice-list-title a:hover,
    .themeum-notice-list .thm-notice-data .notice-list-cats a:hover,
    .blog-post-meta li a:hover,
    .adons-themeum-feature-course .owl-prev:hover,
    .adons-themeum-feature-course .owl-next:hover,
    .themeum-latest-post.themeum-latest-post-v2 .themeum-latest-post-content .entry-title a:hover,
    .single-event-meta > li > i,
    .themeum-topstories-item a,
    .widget ul li a:hover,
    .common-menu-wrap .sub-menu li.active > a,
    .entry-summary .post-meta-info-list-in a:hover {
        color: #ed1c24;
    }
    
    input:focus,
    textarea:focus,
    keygen:focus,
    select:focus,
    .mc4wp-form .mchimp-newsletter input[type=email] {
        border-color: #ed1c24;
    }
    
    .package-list-content .package-list-title a:hover,
    .themeum-latest-post-content .entry-title a:hover,
    .thm-tk-search .thm-tk-search-nav ul li a:hover,
    .thm-tk-search .thm-tk-search-nav ul li a.active i,
    .thm-tk-search .thm-tk-search-nav ul li a.active,
    .ui-datepicker .ui-datepicker-calendar td:hover a,
    .package-sidebar .need-help p i,
    .package-share li a:hover {
        color: #ed1c24;
    }
    
    .single-event-content:hover .event-content-wrapper,
    .thm-tk-search .thm-tk-search-nav ul li a i:after,
    .select2-container--default .select2-results__option--highlighted[aria-selected],
    .select2-dropdown .select2-results .select2-results__options .select2-results__option:hover,
    .ui-slider .ui-slider-handle,
    .ui-datepicker .ui-datepicker-current-day a,
    .themeum-pagination ul li .page-numbers.current,
    .themeum-pagination ul li a:hover,
    .package-nav-tab.nav-tabs>li.active>a,
    .package-nav-tab.nav-tabs>li.active>a:focus,
    .package-nav-tab.nav-tabs>li.active>a:hover,
    .package-nav-tab.nav-tabs>li>a:hover,
    .latest-post-title,
    .title-leftborder:before,
    .addon-themeum-title .title-leftborder:before,
    .shortcode-upcoming-event .entry-date,
    .themeum-notice-list .notice-list-meta-date,
    .educon-blog-date,
    .entry-summary .wrap-btn-style .btn,
    .widget .tagcloud a,
    .single.single-post .post-navigation span>a,
    .comment-navigation .nav-previous a,
    .comment-navigation .nav-next a,
    .form-submit input[type=submit],
    .themeum-twitter .owl-dot.active>span,
    .contact-form-wrapper input[type="submit"],
    .conference-img a,
    .entry-summary input[type=submit] {
        background: #ed1c24;
    }
    
    .btn.btn-slider:hover,
    .btn.btn-slider:focus {
        background-color: #ed1c24;
        border-color: #ed1c24;
    }
    
    .adons-themeum-feature-course .owl-prev:hover,
    .adons-themeum-feature-course .owl-next:hover {
        border-color: #ed1c24;
    }
    
    a:hover,
    .widget.widget_rss ul li a {
        color: #c5181f;
    }
    
    .error-page-inner a.btn.btn-primary.btn-lg:hover,
    .btn.btn-primary:hover,
    input[type=button]:hover,
    .widget.widget_search #searchform .btn-search:hover,
    .themeum-notice-list:hover .notice-list-meta-date,
    .entry-summary .wrap-btn-style .btn:hover,
    .entry-summary .wrap-btn-style .btn:focus,
    .widget .tagcloud a:hover,
    .single.single-post .post-navigation span>a:hover,
    .single.single-post .post-navigation span>a:focus,
    .comment-navigation .nav-previous:hover a,
    .comment-navigation .nav-next a:hover,
    .form-submit input[type=submit]:hover,
    .contact-form-wrapper input[type="submit"]:hover,
    .educon-block {
        background-color: #c5181f;
    }
    
    .woocommerce a.button:hover,
    .single.single-post .post-navigation span>a:hover,
    .single.single-post .post-navigation span>a:focus,
    .comment-navigation .nav-previous:hover a,
    .comment-navigation .nav-next a:hover {
        border-color: #c5181f;
    }
    

    

    
    .mc4wp-form-fields input[type=submit],
    .common-menu-wrap .nav>li.online-booking-button a,
    .error-page-inner a.btn.btn-primary.btn-lg,
    .btn.btn-primary,
    .package-list-button {
        background-color: #ed1c24;
        border-color: #ed1c24;
        color: #fff !important;
    }
    
    .mc4wp-form-fields input[type=submit]:hover,
    .common-menu-wrap .nav>li.online-booking-button a:hover,
    .error-page-inner a.btn.btn-primary.btn-lg:hover,
    .btn.btn-primary:hover,
    .package-list-button:hover,
    .btn.btn-transparent:hover {
        background-color: #c5181f;
        border-color: #c5181f;
        color: #fff !important;
    }
    
    .common-menu-wrap .nav>li.menu-item-has-children:after,
    .header-borderimage .common-menu-wrap .nav>li.menu-item-has-children:after,
    .common-menu-wrap .nav>li>a,
    .header-borderimage .common-menu-wrap .nav>li>a {
        color: #959595;
    }
    
    .common-menu-wrap .nav>li>a:before {
        background-color: #ed1c24;
    }
    
    .footer-wrap {
        background-color: #1b1d26;
        padding-top: 26px;
        padding-bottom: 26px;
    }
    
    .footer-wrap {
        color: #fff;
    }
    #map {
  height: 500px;
  width: 100%;
}

#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: left;

  line-height: 30px;
  padding-left: 10px;
  width: 200px;
}
    
    .footer-wrap a {
        color: #ed1c24;
    }
    
    .footer-wrap a:hover {
        color: #c5181f;
    }
    
    .footer-wrap .social-share li a {
        color: #fff;
    }
    
    .footer-wrap .social-share li a:hover {
        color: #00aeef;
    }
    
    .bottom {
        background-color: #20232e;
    }
    
    .bottom {
        border-top-color: #20232e;
        padding-top: 85px;
        padding-bottom: 85px;
    }
    
    .bottom,
    .bottom-widget .contact-info p {
        color: #959595;
    }
    
    .bottom-widget .widget-title {
        color: #ffffff;
    }
    
    .bottom a,
    .widget ul li a {
        color: #959595;
    }
    
    .bottom a:hover {
        color: #c5181f;
    }
    
    .common-menu-wrap .nav>li ul {
        background-color: #f5f5f5;
    }
    
    .common-menu-wrap .nav>li>ul li a {
        color: #545454;
        border-color: #eaeaea;
    }
      
    .common-menu-wrap .nav>li>.megamenu-container > ul li a,
    .common-menu-wrap .nav>li>ul li a,
    .common-menu-wrap .nav>li ul div.custom-output {
        color: #545454;
    }
    
    .common-menu-wrap .nav>li>ul li a:hover {
        color: #ed1c24;
        background-color: #fbfbfc;
    }
    
    .common-menu-wrap .nav>li>.megamenu-container > ul li a:hover,
    .common-menu-wrap .nav>li>ul li a:hover,
    .common-menu-wrap .nav>li>.megamenu-container > ul li.active > a,
    .common-menu-wrap .megamenu li.active > a {
        color: #ed1c24;
    }
    
    .common-menu-wrap .nav>li > ul::after {
        border-color: transparent transparent #fff transparent;
    }
    
    .subtitle-cover h2 {
        font-size: 60px;
        color: #fff;
    }
    
    .page-subleading {
        font-size: 18px;
        color: #fff;
    }
    
    .subtitle-cover {
        padding: 100px 0 95px;
        margin-bottom: 100px;
    }
    
    body.error404,
    body.page-template-404 {
        width: 100%;
        height: 100%;
        min-height: 100%;
        background: #333 url() no-repeat 100% 0;
    }
    
    .full-width-events .col-md-3 .entry-date-overlayer {
        background-color: #ed1c24;
    }
    
    .full-width-events:hover .col-md-3 .entry-date-overlayer {
        background-color: #000;
    }
    
    .topbar a:hover {
        color: #fff;
    }
    </style>  

<section id="main">
    <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
        <div class="container">
          <div class="row">
            <div class="text-left col-md-8">
                <h2 class="page-leading">Contact Us</h2>
                  <h3 class="page-subleading">Get in Touch with <?php echo $university_name; ?> </h3> </div>
          </div>
        </div>
      </div>
      <!--/.sub-title-->
      <div class="container">
        <div id="content" class="site-content" role="main">
          <div id="post-1664" class="post-1664 page type-page status-publish hentry">
            <div class="entry-content">
              <div class="container">
                <div class="vc_row wpb_row vc_row-fluid contact-form-wrapper-map vc_custom_1490339153567">
                  <div class="form-intro wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner ">
                      <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                          <div class="wpb_wrapper">
                             <h3 class="sppb-addon-title">CONTACT INFO</h3>
                              <p><?php echo $university_name; ?></p>
                              <p><?php echo $full_location; ?></p>
                              <p>P. B. No. <?php echo $pos_box_num; ?> </p>
                              <p><?php echo $con1; ?> </p>
                              <p><?php echo $cont2; ?> </p>
                              <p><?php echo $web_link; ?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
      <div class="vc_col-sm-8">
      <div class="row">
        <div id="floating-panel">                       
          <b>Start:</b>
            <select id="start">
              <option value="Hattiban Bus Stop">Hattiban Bus Stop</option>
            <option value="Koteshwor, Kathmandu 44600">Koteswor</option>
        <option value="New Baneshwor, Kathmandu 44600">New Baneshwor</option>
        <option value="New Rd, Kathmandu 44600">New Road</option>
        <option value="Kalanki, Kathmandu 44600">Kalanki</option>
        <option value="Banepa">Banepa</option>
        <option value="Godawari Bus Stop, Godawari 44709">Godawari</option>
        <option value="Chakrapath Bus Stop, Maharajgunj Rd, Kathmandu 44600">Chakrapath</option>
        <option value="Chabahil, Kathmandu 44600">Chabahil</option>
        <option value="Maitighar Mandala, Kathmandu 44600">Maitighar Mandala</option>
        <option value="Kalimati, Kathmandu 44600">Kalimati</option>
        <option value="Anamnagar, Kathmandu 44600">Anamnagar</option>
        <option value="Nagarkot">Nagarkot</option>
      </select>
      <b>End:</b>
        <select id="end">
          <option value="Kathmandu University School of Arts, P. B. No. 6250, Patan 44700">KUSOA</option>
      </select>
  </div>
<div id="map"></div>
  <!-- Replace the value of the key parameter with your own API key. -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-2AP7o_dNI1ZNtMYImbL-FxLNy2fXeV0&callback=initMap">
    </script>
      <script type="text/javascript">
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: {lat: 27.6474766, lng: 85.3325915}
          });
          directionsDisplay.setMap(map);

        var onChangeHandler = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
  document.getElementById('start').addEventListener('change', onChangeHandler);
  document.getElementById('end').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: document.getElementById('start').value,
    destination: document.getElementById('end').value,
    travelMode: 'DRIVING'
  }, function(response, status) {
    if (status === 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}
</script>
 </div>
</div>


</div>
</div>
     <div class="container">
        <div class="vc_row wpb_row vc_row-fluid contact-form-wrapper vc_custom_1490339159711">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
              <div class="wpb_wrapper">
                <div role="form" class="wpcf7 visitors-query" id="success-message" lang="en-US">
                  <div class="screen-reader-response"></div>
                    <form action="#" method="post" class="wpcf7-form" id="cn-info">
                   <h2>Send us your Feedback</h2>
                <div class="row">
              <div class="col-sm-4">
            <div class="bg-contact"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="Vname" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Name*" /></span></div>
          </div>
        <div class="col-sm-4">
      <div class="bg-contact"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="Vemail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" required="required" placeholder="Your Email*" /></span></div>
    </div>
    <div class="col-sm-4">
      <div class="bg-contact"><span class="wpcf7-form-control-wrap phone"><input type="text" name="Vphone" value="" size="40" class="wpcf7-form-control wpcf7-text"  placeholder="Your Phone Number*" minlen="7" maxlen="10" /></span></div>
      </div>
      <div class="col-sm-12">
      <div class="bg-contact"><span class="wpcf7-form-control-wrap"><textarea name="Vmessage" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"  placeholder="Message"></textarea></span></div>
      </div>
      <div class="col-sm-12">
      <div class="contact-submit">
      <input type="submit" value="Submit Your Message" class="wpcf7-form-control" />
     </div>
   </div>
  </div>
 <div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 <!--/#content-->
</div>
</section>

