<?php
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
                <h2 class="page-leading">Album List</h2>
                <h3 class="page-subleading">Kathmandu University School of Arts Album</h3> </div>
                    </div>
                </div>
            </div>
            <!--/.sub-title-->
            <div class="container">
                <div id="content" class="site-content" role="main">
                    <div id="post-2212" class="post-2212 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1490338222561">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
        <div class="wpb_wrapper">
            <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                <div class="photo-gallery  clearfix">
                    <div class="row">
                      <?php
    if(!empty($gallery)){
        foreach ($gallery as $key => $gal){
            $gallery_name = $gal['gallery_title'];
            $a_id = $gal['a_id']; 
            

             $posted_date = $gal['posted_date'];
            $cdate = new DateTime($posted_date);
            $y =    $cdate->format("Y");
            $mon =    $cdate->format("F");
            $day =    $cdate->format("d");

            $date = $day.' '.$mon.' '.$y;


            $g = $gal['image'];
            $j = json_decode($g,true);
            $n =1;
            foreach ($j as $key => $v) {
               if($n==1){
                 $m = base_url().'uploads/gallery/'.$v['upload_file'];
                    echo '  <div class="col-xs-6 col-sm-4">
        <div class="educon-gallery-item">
            <div class="gallery-item-image">
                <a href="'.base_url().'index.php/Arts/singleGallery?g='.$a_id.'"><img src="'.$m.'" alt="'.$gallery_name.'" class="img-responsive" style="height:300px;width:100%;"/></a>
                    <h3 class="music-videos-title"><a class="gallery-item-title" href="'.base_url().'index.php/Arts/singleGallery?g='.$a_id.'">'.$gallery_name.'</a><span>'.$date.'</span></h3>
            </div>
        </div>
   </div>';
                 $n++;
               }else{
                break;
               }

            }         

        }
    }else{
        echo "No image available.";
    }
?>
                </div>
           </div>
        </div>
    </div>
</div>
</div>
</div>
                   
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper"></div>
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