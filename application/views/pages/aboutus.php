 <?php
    if(!empty($aboutus)){
        $abt_title = $aboutus['0']['about_us_title'];
        $message = $aboutus['0']['description'];
    if(!empty($aboutus['0']['cover_photo'])){

$cover_photo = '<div class="vc_single_image-wrapper   vc_box_border_grey"><img  src="'.base_url().'uploads/'.$aboutus['0']['cover_photo'].'" class="img-responsive vc_single_image-img attachment-full"/></div>';
    }else{
         

 $cover_photo =  '<div class="vc_single_image-wrapper   vc_box_border_grey"><img  src="'.base_url().'uploads/initial-images/kuart_background3.jpg" class="img-responsive vc_single_image-img attachment-full"/></div>';
    }
        
        $fb = $aboutus['0']['fb_page_link'];
        $twi = $aboutus['0']['twit_page_link'];

        if(!empty($aboutus['0']['twit_page_link'])){
            echo '<li><a href="'.$twi.'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }else{
                echo '';
            }
        
    }else{
        $abt_title ='';
        $message ='';
        $cover_photo ='';
        $fb ='';
        $twi = '';
    }
    if(!empty($banner)){
        if($banner['0']['banner_of']==='aboutus'){
            $b = base_url().'uploads/banner/'.$banner['0']['banner_name'];
        }
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
        height: 100%;
}

 </style>
            <section id="main">
            <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">About Us</h2>
                            <h3 class="page-subleading">Kathmandu University School of Arts</h3></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="content" class="site-content" role="main">
                    <div id="post-2334" class="post-2334 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1490336274146 vc_row-has-fill">
                                  <div class="row">  <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_left">
                            <figure class="wpb_wrapper vc_figure"><div class="row">
                                <?php echo $cover_photo;?>
                                </div></figure>
                                    </div>
                                    </div>
                                        </div>
                        </div></div>
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper" style="padding-bottom: 30px;">
                                    <div class="addon-themeum-title " style="text-align:left;">
                                    <div class="themeum-title title-leftborder leftborder">
                                    <h2 class="thm-titlecustomstyle" style="font-size:16px;word-wrap: break-word;color:#000000;font-weight:700;margin:20px 0px 26px 0px;padding:0px;"><?php echo $abt_title;?></h2></div>
                                </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p><?php echo $message;?>
                                            </p>
                                            </div>
                                <div class="themeum-social-button" style="float: right;padding: 30px;">
                                 <ul class="list-unstyled" style="margin:10px 0 10px 12px;">
                                        <li><a>Know more about us:</a></li>
                                        <li><a href="<?php echo $fb;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <?php echo $twi;?>
                                         <!-- <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li> -->
                                                    </ul>
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



        </section>
