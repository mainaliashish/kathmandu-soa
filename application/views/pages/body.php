
<style>
    .visitors-query p{
  text-align: center;
    font-size: 70px;
    color: #0a8d0a;
}
.visitors-query h4, .visitors-query h5{
  text-align: center;
    color: #43aa43;
}
.themeum-topstories-item img {
    height: 170px !important;
}
</style>
<section id="main" class="clearfix">
    <div class="container-fluid">
        <div id="content" class="site-content" role="main">
            <div id="post-1770" class="post-1770 page type-page status-publish hentry">
                <div class="entry-content">
                   <!-- Start WOWSlider.com BODY section -->
                    <!-- <div class="row"> -->
                    <div class="row">
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
<?php 
if(!empty($s_images)){
     foreach ($s_images as $key => $slider) {
        $s_id = $slider['s_id'];
       $images = $slider['image_name'];
       $img = base_url().'uploads/slider/'.$slider['image_name'];

            echo '<li><img src="'.$img.'" alt="'.$images.'" title="'.$images.'" id="wows1_'.$s_id.'"/></li>';
        }
    }
    else{
        echo '';
    }
?>
        </ul>
    </div>
<div class="ws_bullets"><div>
<?php 
if(!empty($s_images)){
     foreach ($s_images as $key => $slider) {
        $s_id = $slider['s_id'];
       $images = $slider['image_name'];
       $img = base_url().'uploads/slider/'.$slider['image_name'];

    echo '<a href="#" title="'.$images.'"><span>'. $s_id.'</span></a>';
        }
    }
    else{
        echo '';
    }
?>
</div>
</div>
 <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">http://wowslider.net/</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div> </div> 
<script type="text/javascript" src="<?php echo base_url();?>engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->     
  <?php 
    if(!empty($aboutus)){
        $a_title = $aboutus['0']['about_us_title'];
        $a_msg =  strip_tags($aboutus['0']['description']);
        $s_msg = substr($a_msg,0,80);

        if(!empty($aboutus['0']['cover_photo'])){
            $cover_photo = base_url().'uploads/'.$aboutus['0']['cover_photo'];
        }else{
            $cover_photo = base_url().'uploads/initial-images/college.jpg';
        }

    }else{
$a_title = '';
$s_msg  = '';
 $cover_photo = '';
    }
  ?>                           
 <div class="container">
     <div class="vc_row wpb_row vc_row-fluid vc_custom_1488190439967">
        <div class="wpb_column vc_column_container vc_col-sm-4">
                <div class="vc_column-inner vc_custom_1490271203184">
            <div class="wpb_wrapper">
            <div class="addon-themeum-title " style="text-align:left;">
            <div class="themeum-title title-leftborder leftborder">
            <h3 class="thm-titlecustomstyle" style="font-size:16px;word-wrap: break-word;color:#000000;font-weight:700;margin:0 0px 26px 0px;">ABOUT KUSOA</h3></div>
                                                </div>
<div class="themeum-feature-wrapper " style="border-radius:3px 3px 3px 3px;text-align:left;background:#ffffff;">
<div class="feature-img-area-default default">
    <img class="img-responsive" alt="photo" src="<?php echo $cover_photo;?>"></div>
<div class="feature-content-area" style="padding:20px 30px 30px;">
     <h3 class="feature-title" style="font-size:20px;word-wrap: break-word;line-height:24px;color:#000000;font-weight:400;margin:11px 0 11px 0;padding:10px 0 10px 0;"><?php echo $a_title ;?></h3>
    <div class="feature-subtitle" style="font-size:14px;word-wrap: break-word;line-height:24px;font-weight:500;margin:0 0 10px 0;"><?php echo $s_msg;?> <br> &nbsp </div><a data-btn-hover-color="" class="feature-btn" style="" href="<?php echo base_url();?>index.php/Arts/schoolofarts">READ MORE<i class="fa fa-angle-right"></i></a></div>
    </div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-4">
<div class="vc_column-inner vc_custom_1490271208515">
    <div class="wpb_wrapper">
        <div class="addon-themeum-title " style="text-align:left;">
<div class="themeum-title title-leftborder leftborder">
<h3 class="thm-titlecustomstyle" style="font-size:16px;word-wrap: break-word;color:#000000;font-weight:700;margin:0 0px 26px 0px;">STUDENT LIFE</h3></div>
</div>
<?php
    if(!empty($life)){
         $lid=$life['0']['id'];
         $life_title=$life['0']['title'];
        $des = $life['0']['description'];
        $m_des = substr($des,0,80);
if(!empty($life['0']['cover_photo'])){
            $l_photo = base_url().'uploads/'.$life['0']['cover_photo'];
        }else{

            $l_photo = base_url().'uploads/initial-images/bg_kuart6.jpg';
        }
    }else{
        $des='';
        $life_title='';
         $l_photo='';
    }?>

    <div class="themeum-feature-wrapper " style="border-radius:3px 3px 3px 3px;text-align:left;background:#ffffff;">
       <div class="feature-img-area-default default"><img class="img-responsive" alt="photo" src="<?php echo $l_photo;?>"></div>
<div class="feature-content-area" style="padding:20px 30px 30px;">
<h3 class="feature-title" style="font-size:20px;word-wrap: break-word;line-height:24px;color:#000000;font-weight:400;margin:10px 0 10px 0;padding:10px 0 10px 0;"><?php echo $life_title;?></h3>
<div class="feature-subtitle" style="font-size:14px;word-wrap: break-word;line-height:24px;font-weight:500;margin:0 0 10px 0;"><?php echo $m_des;?></div><a data-btn-hover-color="" class="feature-btn" style="" href="<?php echo base_url();?>index.php/Arts/sdudentlife">READ MORE<i class="fa fa-angle-right"></i></a></div>
</div>



</div>
</div>
</div>
    <div class="latest-post-margin wpb_column vc_column_container vc_col-sm-4">
<div class="vc_column-inner vc_custom_1490680377550">
    <div class="wpb_wrapper">
        <div class="themeum-latest-post-wrap">
            <h3 class="latest-post-title zindex">Latest Announcements</h3>
               <?php 
               if(!empty($ann)){
               foreach ($ann as $key => $announce) {
                        $title = substr($announce['a_title'],0,30);
$posted_date = $announce['posted_date'];
 $cdate = new DateTime($posted_date);
  $y =    $cdate->format("Y");
   $mon =    $cdate->format("M");
    $day =    $cdate->format("d");

                   echo  '<div class="themeum-latest-post-list"><span class="post-list-meta-date"> <i class="fa fa-clock-o"></i>'.$mon.', '.$day.', '.$y.'</span>
                <h4 class="post-list-title"><a href="'.base_url().'index.php/Arts/singleannoucement?aid='.$announce['a_id'].'">'.$title.'......'.'</a></h4></div>';
               }
          echo '<a class="btn-top-stories text-center" href="'.base_url().'index.php/Arts/announcements"><i class="fa fa-angle-left"></i>  VIEW ALL</a>';    
 }
 else{
    echo 'No announcement available !!';
 }
 ?>
<!-- ann -->
</div>
 </div>
</div>
</div>
</div>
</div>



<div class="container">
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1490272725101 vc_row-has-fill">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                <div class="vc_column-inner vc_custom_1490271091078">
                 <div class="wpb_wrapper">
                <div class="addon-themeum-action " style="text-align:left;">
                    <div class="themeum-action">
                    <div class="row">
        <div class="col-sm-9">
 <h3 class="action-titlecustomstyle" style="font-size:14px;line-height: normal;color:#ffffff;font-weight:400;margin:28px 0 0;">Undergraduate Programs</h3><span class="action-sub-titlecustomstylesub" style="font-size:24px;line-height: normal;color:#ffffff;font-weight:700;">Admission Open</span></div>
        <div class="col-sm-3 btnright"><a class="action-btn btn btn-white btn-lg btnright" href="<?php echo base_url();?>index.php/Arts/Applyundergraduation">Apply Now</a></div>
</div>
</div>
 </div>
</div>
</div>
</div>
</div>
 </div>

<div class="container">
        <div class="vc_row wpb_row vc_row-fluid programmargin">
            <div class="wpb_column vc_column_container vc_col-sm-12 ">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                <div class="adons-themeum-feature-course ">
                    <div class="title-leftborder-wrap">
                        <h3 class="title-leftborder">PROGRAMS</h3></div>
                   
  <div data-number="3" data-aplay="true" data-testnav="true" class="themeum-feature-course owl-carousel owl-theme carosuel">

            <?php 
             if(!empty($academics)){
                foreach ($academics as $key => $program) {
            if(!empty($program['program_banner'])){
                $banner = base_url().'uploads/program-cover/'.$program['program_banner'];
            }else{
                $banner = base_url().'uploads/default_course_cover.jpg';
            }
            $detail = strip_tags($program['program_at_KU']);
            $short_detail = substr($detail,0,80);
                if(strtolower($program['level']) === 'bachelor'){
                    $url = base_url().'index.php/Arts/undergraduate?u='.$program['id'];
                }else{
                     $url = base_url().'index.php/Arts/graduate?g='.$program['id'];
                }


        echo '<div class="themeum-course-in item">
                 <a class="review-item-image" href="'.$url.'"><img width="570" height="360" src="'.$banner.'" class="img-responsive wp-post-image" alt="" style="height: 200px;" /></a>
                <div class="themeum-course-content"><span>'.$program['level'].'</span>
                  <h3><a class="coursetitle" href="'.$url.'">'.$program['program'].'</a></h3>
                    <p class="course-discription">'.$short_detail.'....'.'</p><a class="btn btn-primary" href="'.$url.'">Apply Now <i class="fa fa-angle-right"></i></a></div>
                            </div>';
                        }
                    }else{
                        echo "Nothing available !!";
                    }

                            ?>
                            
    </div>

                    </div>
                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php if(!empty($tour)){
    $t_title = $tour['0']['title'];
    $link =  $tour['0']['link'];
    $desc = $tour['0']['description'];
}else{
$t_title ='';
    $link = '';
    $desc ='';
    }?>

                            
   <div class="container">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1490331437679">
            <div class="wpb_column vc_column_container vc_col-sm-7 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1488347321731">
                        <div class="wpb_wrapper">
                                <div class="addon-themeum-popup-video " style="text-align:center;">
                                <div class="themeum-popup-video">
            <p class="video-width"><a class="popup-video middle" href="<?php echo $link;?>" id="videoPlay" data-rel="popup"><i style="font-size: 90px; color:#ffffff;" class="fa fa-youtube-play"></i></a></p>
                </div>
            </div>
            </div>
            </div>
            </div>
    <div class="wpb_column vc_column_container vc_col-sm-5 vc_col-has-fill">
<div class="vc_column-inner vc_custom_1490342668103">
    <div class="wpb_wrapper">
            <div class="addon-themeum-title " style="text-align:left;">
        <div class="themeum-title title-leftborder leftborder">
        <h3 class="thm-titlecustomstyle" style="font-size:16px;word-wrap: break-word;color:#000000;font-weight:700;margin:0 0px 26px 0px;">Take a tour</h3><span class="thm-sub-titlecustomstylesub" style="font-size:24px;word-wrap: break-word;font-weight:400;margin:0 0 10px 0;"><?php echo $t_title;?></span>
            <div class="introtext" style="font-size:14px;word-wrap: break-word;color:#000000;"><?php echo $desc;?></div>
         </div>
        </div>
</div>
</div>
</div>
</div>




<div class="container">
<div class="vc_row wpb_row vc_row-fluid vc_custom_1490331446349">
     <div class="padding-left15 educon-box-shadow wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
            <div class="vc_column-inner vc_custom_1490246885085">
                <div class="wpb_wrapper">
        <div class="addon-themeum-title " style="text-align:left;">
                <div class="themeum-title title-leftborder leftborder">
                <h3 class="thm-titlecustomstyle" style="font-size:16px;word-wrap: break-word;color:#000000;font-weight:700;margin:0 0px 40px 0px;">YOUR FIRST POINT OF CONTACT</h3><span class="thm-sub-titlecustomstylesub" style="font-size:18px;word-wrap: break-word;color:#000000;margin:0 0 10px 0;">Detailed information, brochures and forms can be mailed to you upon request.</span>
         <div class="introtext" style="font-size:14px;word-wrap: break-word;color:#000000;">The quick brown fox jumped over the lazy dog.The quick brown fox jumped over the lazy dog.The quick brown fox jumped over the lazy dog.The quick brown fox jumped over the lazy dog.</div>
</div>
        </div>
         <div class="event-register-form">
    <div class="row">
        <div class="col-md-7">
            <div id="event-register-form" class="white-popup mfp-with-anim mfp-hide visitors-query">
                <h3 class="title">Request Information</h3>
                <div role="form" class="wpcf7" id="wpcf7-f2514-p2102-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                  <form action="#" method="post" class="wpcf7-form" id="RqstInfo">
            <div class="row">
                <div class="col-sm-4">
                    <div class="bg-contact"><span class="wpcf7-form-control-wrap"><input type="text" name="Vname" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Full Name*"/></span></div>
                </div>
                <div class="col-sm-4">
                <div class="bg-contact"><span class="wpcf7-form-control-wrap"><input type="email" name="Vemail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="Your Email*" required="required"/></span></div>
            </div>
            <div class="col-sm-4">
            <div class="bg-contact"><span class="wpcf7-form-control-wrap"><input type="text" name="Vphone" value="" size="40" class="wpcf7-form-control wpcf7-text" pattern="[0-9]{7,10}" minlen="7" maxlen="10" placeholder="Your Phone Number*" title="Phone number, minlen=7 & maxlen=10"/></span></div>
        </div>
    <div class="col-sm-12">
    <div class="bg-contact"><span class="wpcf7-form-control-wrap"><textarea name="Vmessage" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span></div>
    </div>
     
      <div class="col-sm-12">
        <div class="contact-submit">                   
          <input type="submit" value="Request Information" class="btn btn-primary" /></div>
      </div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
</div>
</div>
    <a href="#event-register-form" class="btn btn-primary event-register-form-btn event-register-btn-form" data-effect="mfp-zoom-in" id="my_choice">REQUEST INFORMATION <i class="fa fa-angle-right"></i></a>
                </div>

            </div>
      </div>
        </div>
        </div>
    </div>
        <div class="padding15 educon-box-shadow wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
        <div class="vc_column-inner vc_custom_1490246889765">
         <div class="wpb_wrapper">
            <div class="addon-themeum-title " style="text-align:left;">
                <div class="themeum-title title-leftborder leftborder">
        <h3 class="thm-titlecustomstyle" style="font-size:16px;word-wrap: break-word;color:#000000;font-weight:700;margin:0 0px 40px 0px;">Upcoming Event</h3></div>
    </div>
            <div class="shortcode-upcoming-event ">

            <?php 
            if(!empty($events)){
                foreach ($events as $key => $eve) {
             $posted_date = $eve['posted_date'];
    $cdate = new DateTime($posted_date);
    $y =    $cdate->format("Y");
    $mon =    $cdate->format("M");
    $day =    $cdate->format("d");
   $s_time = date("g:i a", strtotime($eve['start_time']));
    $e_time = date("g:i a", strtotime($eve['end_time']));
    

                    echo ' <div class="upcoming-event-content clearfix">
        <div class="entry-date"><span class="entry-date-day">'.$day.'</span><span class="entry-date-month">'.$mon.','.$y.'</span></div><span class="entry-date-time"><i class="fa fa-clock-o" aria-hidden="true"></i> '.strtoupper($s_time).' - '.strtoupper($e_time).'</span>
            <h3><a href="'.base_url().'index.php/Arts/singleEvent?eid='.$eve['a_id'].'">'.$eve['event_title'].'</a></h3></div>';
                }
            }
            else{
                echo 'No Upcomming Event available !';
            }
            ?>
            </div>
        <div class="themeum-button " style="text-align:left;margin:22px 0 0;display:inline; display:block;"><a data-hover-color="#ed020a" data-hover-bg-color="" data-hover-border-color="" class="themeum-btn " style="font-size:14px;line-height: normal;color:#ed1c24;font-weight:600;" href="<?php echo base_url();?>index.php/Arts/events">SEE ALL EVENTS<i class="fa fa-angle-right"></i></a></div>
        </div>
        </div>
            </div>
        <div class="padding-right15 educon-box-shadow wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
        <div class="vc_column-inner vc_custom_1490246894410">
            <div class="wpb_wrapper">
        <div class="themeum-topstories ">
<div id="themeum-topstories" class="carousel slide" data-ride="carousel">
            <div class="title-leftborder-wrap">
                        <h3 class="title-leftborder">Latest News</h3></div>



        <div class="themeum-topstories-control"><a class="left" href="#themeum-topstories" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="right" href="#themeum-topstories" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a></div>
<!-- news -->
        <div class="carousel-inner">
        <?php 
            if(!empty($active)){
            $tid = $active['0']['a_id'];
    $news_title = $active['0']['news_title'];

    if(!empty($active['0']['cover_photo'])){
    $cover_photo = base_url().'uploads/news/'.$active['0']['cover_photo'];
    }else{
    $cover_photo = base_url().'uploads/initial-images/college.jpg';
}
       $posted_date = $active['0']['posted_date'];
    $cdate = new DateTime($posted_date);
    $y =    $cdate->format("Y");
    $mon =    $cdate->format("F");
    $day =    $cdate->format("d");

    $date = $mon.' '.$day.', '.$y;


    $link = '<a class="btn-top-stories" href="'.base_url().'index.php/Arts/singleNews?wid='.$tid.'">Read More <i class="fa fa-angle-right"></i></a>';

            }else{
                $cover_photo='';
                 $tid = '';
                $news_title ='';
                $posted_date = '';
                $date = '';
                $link = '';

                echo 'No Top Stories available';
            }
        ?>
    <div class="item active">
    <div class="themeum-topstories-item">
     <a class="review-item-image" href="<?php echo base_url(); ?>index.php/Arts/singleNews?wid=<?php echo $tid;?>"><img width="380" height="170" src="<?php echo $cover_photo;?>" class="img-responsive wp-post-image" alt="" /></a><span class="entry-date"><?php echo strtoupper($date);?></span>
    <h3 class="entry-title"><a href="<?php echo base_url(); ?>index.php/Arts/singleNews?wid=<?php echo $tid;?>"><?php echo  $news_title;?></a></h3><?php echo $link;?></div>
                            </div>

<?php 
if(!empty($news)){
    foreach ($news as $key => $nw) {
           if(!empty($nw['cover_photo'])){
    $cover_photo = base_url().'uploads/news/'.$nw['cover_photo'];
    }else{
    $cover_photo = base_url().'uploads/initial-images/college.jpg';
}
 $posted_date = $nw['posted_date'];
    $cdate = new DateTime($posted_date);
    $y =    $cdate->format("Y");
    $mon =    $cdate->format("F");
    $day =    $cdate->format("d");

    $date = $mon.' '.$day.', '.$y;

       if($tid==$nw['a_id']){
        continue;
       }else{
        echo '<div class="item">
            <div class="themeum-topstories-item"> <a class="review-item-image" href="'.base_url().'index.php/Arts/singleNews?wid='.$nw['a_id'].'"><img width="380" height="160" src="'.$cover_photo.'" class="img-responsive wp-post-image" alt="" /></a><span class="entry-date">'.$date.'</span>
            <h3 class="entry-title"><a href="'.base_url().'index.php/Arts/singleNews?wid='.$nw['a_id'].'">Make Your share &#038; careA Reality fugit ridens dicunt</a></h3><a class="btn-top-stories" href="'.base_url().'index.php/Arts/singleNews?wid='.$nw['a_id'].'">Read More <i class="fa fa-angle-right"></i></a></div>
        </div>';
       }
    }

}else{
    echo '';
}

?>
                           </div>
                         </div>
                        </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1489646851002 vc_row-has-fill ep_row_stretch_row">
                                <div class="container">
                                    <div class="row">
                                        <div class="wpb_column vc_column_container vc_col-sm-8">
                                            <div class="vc_column-inner ">
                 <div class="wpb_wrapper">
                    <div class="themeum-twitter-shortcode ">
                    <ul class="themeum-twitter">
                   <li>
                    <div class="tweet-content media">
                    <div class="social-icon"><i class="fa fa-facebook"></i>
                                  <div class="tweet-username">@</div>
                                            </div>
        <div class="media-body">Few more days for form collection for Masters in HNRS and DEVS!!! Grab your form and spread the news!! → <a target="_blank" class="tweet_url" href="https://www.facebook.com/KathmanduUniversitySchoolOfArts/photos/a.473743386035016.1073741824.266563563419667/1226946477381366/?type=3&theater">View Here</a>
        <div class="tweet-time">2 days</div>
                                    </div>
                                       </div>
                         <div class="clearfix"></div>
                                  </li>
                               <li>
                                <div class="tweet-content media">                               <div class="social-icon"><i class="fa fa-facebook"></i>                                    <div class="tweet-username">@</div>
                        </div>
        <div class="media-body">Few more days for form collection for Masters in HNRS and DEVS!!! Grab your form and spread the news!! → <a target="_blank" class="tweet_url" href="https://www.facebook.com/KathmanduUniversitySchoolOfArts/photos/a.473743386035016.1073741824.266563563419667/1226946477381366/?type=3&theater">View Here</a>
                <div class="tweet-time">2 days</div>
                </div>
                </div>
                <div class="clearfix"></div>
                        </li>
                            <li>
                             <div class="tweet-content media">
                                    <div class="social-icon"><i class="fa fa-facebook"></i>
                                  <div class="tweet-username">@</div>
                                       </div>
                <div class="media-body">Few more days for form collection for Masters in HNRS and DEVS!!! Grab your form and spread the news!! → <a target="_blank" class="tweet_url" href="https://www.facebook.com/KathmanduUniversitySchoolOfArts/photos/a.473743386035016.1073741824.266563563419667/1226946477381366/?type=3&theater">View Here</a>                                            <div class="tweet-time">2 days</div>
                </div>
                                </div>
                <div class="clearfix"></div>
            </li>
            <li>
            <div class="tweet-content media">            <div class="social-icon"><i class="fa fa-facebook"></i>
                            <div class="tweet-username">@</div>
                                </div>
                            <div class="media-body">Few more days for form collection for Masters in HNRS and DEVS!!! Grab your form and spread the news!! → <a target="_blank" class="tweet_url" href="https://www.facebook.com/KathmanduUniversitySchoolOfArts/photos/a.473743386035016.1073741824.266563563419667/1226946477381366/?type=3&theater">View Here</a>
                    <div class="tweet-time">2 days</div>
                   </div>
                                </div>
                                <div class="clearfix"></div>
                           </li>
                             <li>
                             <div class="tweet-content media">
                                   <div class="social-icon"><i class="fa fa-facebook"></i>
                        <div class="tweet-username">@</div>
                               </div>
                        <div class="media-body">Few more days for form collection for Masters in HNRS and DEVS!!! Grab your form and spread the news!! → <a target="_blank" class="tweet_url" href="https://www.facebook.com/KathmanduUniversitySchoolOfArts/photos/a.473743386035016.1073741824.266563563419667/1226946477381366/?type=3&theater">View Here</a>                               <div class="tweet-time">2 days</div>
                                        </div>
                            </div>
                            <div class="clearfix"></div>
                            </li>
                        <li>
                        <div class="tweet-content media">
                        <div class="social-icon"><i class="fa fa-facebook"></i>
                        <div class="tweet-username">@</div>
                                 </div>
                            <div class="media-body">Few more days for form collection for Masters in HNRS and DEVS!!! Grab your form and spread the news!! → <a target="_blank" class="tweet_url" href="https://www.facebook.com/KathmanduUniversitySchoolOfArts/photos/a.473743386035016.1073741824.266563563419667/1226946477381366/?type=3&theater">View Here</a>                                                               <div class="tweet-time">2 days</div>
                                </div>
                                 </div>
                        <div class="clearfix"></div>
                        </li>
                               </ul>
                                         </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="padding-right15 educon-box-shadow wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1490246894410">
                                            <div class="wpb_wrapper">
                                                <div class="themeum-topstories ">
                                         <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKathmanduUniversitySchoolOfArts%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=714155615453299" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                        </div>
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
                 <!--/#backtotop-->
                <a href="#0" class="cd-top zindex">Top</a>
                 <!--/#backtotop-->
            </div>
            <!--/container-->
           
        </section>
        <!--/#main-->
        


