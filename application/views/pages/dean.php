<?php
if($banner['1']['banner_of']=='dean'){
        $b= base_url().'uploads/banner/'.$banner['1']['banner_name'];
   }



    if(!empty($dean)){
        $dean_name = $dean['0']['full_name'];
        $mtitle =  $dean['0']['message_title'];
        $message = $dean['0']['message'];
       if(!empty($dean['0']['cover_photo'])){
             $cover_photo = base_url().'uploads/university-member/'.$dean['0']['cover_photo'];
       }else{
         $cover_photo = base_url().'uploads/initial-images/person.png';
       }
    }else{
        $dean_name ='';
        $mtitle = '';
        $message ='';
        $cover_photo ='';
    }   
?>

<section id="main" class="clearfix">
            <div class="container-fluid">
    <div id="content" class="site-content" role="main">
        <div id="post-1770" class="post-1770 page type-page status-publish hentry">
        <div class="entry-content">
                            
        <div class="row">             

  <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">A Message From Dean</h2>
                            <h3 class="page-subleading">-<?php echo $dean_name;?></h3></div>
                    </div>
                </div>
            </div>
                             
            <div class="container">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1490247701997 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-9" style="padding-bottom: 100px;">
                             <div class="vc_column-inner vc_custom_1490080085722">
                                <div class="wpb_wrapper">
                                    <div class="addon-themeum-title " style="text-align:left;">
                                        <div class="themeum-title title-leftborder leftborder">
                                        <span class="thm-sub-titlecustomstylesub" style="font-size:24px;word-wrap: break-word;color:#000000;font-weight:300;margin:0 0 10px 0;"><?php echo $mtitle;?></span>
                                        <div class="introtext" style="font-size:14px;word-wrap: break-word;color:#959595; text-align: justify;">
                                            <?php echo $message;?>
                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                     <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner vc_custom_1490080014385">
                             <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1490337382954">
                                    <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="653" height="501" src="<?php echo $cover_photo;?>" class="vc_single_image-img attachment-full" alt="" srcset="<?php echo $cover_photo;?>" sizes="(max-width: 653px) 100vw, 653px" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                            <h3 style="padding-bottom:30px;"> -<?php echo $dean_name;?></h3>
                                        </div>
                                    </div>
                                   
                                    </div>
                                    </div>

                              
                                   
                                </div></div>
                            </div>
                            <div class="container"></div>
                          
                       
                   
                        </div>
                    </div></section>