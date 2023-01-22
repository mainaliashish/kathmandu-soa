<?php

$name = $g['0']['gallery_title'];

 if(!empty($banner)){
        if($banner['9']['banner_of']==='gallery'){
            $b = base_url().'uploads/banner/'.$banner['9']['banner_name'];
        }
    }
?>


         <section id="main">
            <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">Photo Gallery</h2>
                            <h3 class="page-subleading"><?php echo $name;?></h3> </div>
                    </div>
                </div>
            </div>
            <!--/.sub-title-->
            <div class="container">
                <div id="content" class="site-content" role="main">
                    <div id="post-1737" class="post-1737 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1490338583983 ep_row_stretch_row">
                                <div class="container">
                                    <div class="row">
                                        <div class="wpb_column vc_column_container vc_col-sm-12" style="margin-bottom: 100px;">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="themeum-photo-gallery-item ">

<?php 
    foreach ($g as $key => $a){
        $name = $a['gallery_title'];
       $gallery = $a['image'];
       $j = json_decode($gallery, true);

       foreach ($j as $key => $value) {
           $image = base_url().'uploads/gallery/'.$value['upload_file'];

           echo '<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
    <div class="conference-img">
        <div class="photo " style="margin:15px;">
            <a style="background:#ed1c24;" href="'.$image.'" class="plus-icon">
            <img src="'.$image.'" class="img-responsive" alt="'.$name.'" style="height:300px;width:100%;"/>
        </a>
        </div>
    </div>
</div>';
       }
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
                </div>
            </div>
                <!--/#content-->
        </div>
</section>