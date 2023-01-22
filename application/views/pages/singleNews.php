<?php 
if(!empty($news)){

$news_title= $news['0']['news_title'];
$description= $news['0']['description'];
if(!empty($news['0']['cover_photo'])){
    $cover_photo = base_url().'uploads/news/'.$news['0']['cover_photo'];
}else{
    $cover_photo = base_url().'uploads/initial-images/college.jpg';
}
 $posted_date = $news['0']['posted_date'];
 $cdate = new DateTime($posted_date);
    $y =  $cdate->format("Y");
    $mon =    $cdate->format("M");
    $day =    $cdate->format("d"); 

}else{
    $news_title='';
    $description='';
    $cover_photo='';
    $posted_date = '';
}
?>
<style>
     .vc_custom_1490336274146 {
    margin-bottom: 50px !important;
    padding-top: 30px !important;
    padding-right: 15px !important;
    padding-left: 15px !important;
    background-color: #ffffff !important;
}
.wpb_thumbnails-fluid {
    margin-bottom: 0px !important;
}

.vc_column_container > .vc_column-inner {
    box-sizing: border-box;
    padding-left: 15px;
    padding-right: 15px;
    margin-top: -30px !important;
    width: 100%;
}
.wpb_single_image img {
        width: 1600px !important;
        height: 400px !important;
}

 </style>
        <section id="main" class="blog-wrappers-content">
            <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $cover_photo; ?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">

                    <div class="row">

                        <div class="text-left col-md-8">
                            <h2 class="page-leading">Latest News</h2>
                            <h3 class="page-subleading"><?php echo $news_title;?> </h3> </div>
                    </div>
                </div>
            </div>
            <!--/.sub-title-->
           
           <div id="content" class="site-content" role="main">
                    <div id="post-2334" class="post-2334 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1490336274146 vc_row-has-fill">
                                  <div class="row">  <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_left" style="margin-top: -1px;">
                            <figure class="wpb_wrapper vc_figure"><div class="row">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="<?php echo $cover_photo; ?>" class="img-responsive vc_single_image-img attachment-full"></div>
                                </div></figure>
                                    </div>
                                    </div>
                                        </div>
                        </div></div>
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper" style="padding-bottom: 30px;">
                                    <div class="addon-themeum-title " style="text-align:left;">
                                    <span class="entry-date-time"></span>
                                    <div class="themeum-title title-leftborder leftborder">
                                    <h2 class="thm-titlecustomstyle" style="font-size:16px;word-wrap: break-word;color:#000000;font-weight:700;margin:20px 0px 26px 0px;padding:0px;"><?php echo $news_title;?> </h2></div>
                                </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                    <p></p><div id="post-2" class="group post-2 page type-page status-publish has-post-thumbnail hentry">
                <p><?php echo $description; ?></p>
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
                </div>
            <!-- .container -->
        </section>