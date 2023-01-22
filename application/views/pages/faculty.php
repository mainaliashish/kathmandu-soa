 <section id="main">
            <div class="subtitle-cover sub-title" style="background-image:url(../../assets/uploads/2017/03/edu-banner3.jpg);background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">Our Faculty Members</h2>
                           <!--  <h3 class="page-subleading">Our university teachers</h3>  -->
                            </div>
                    </div>
                </div>
            </div>
            <!--/.sub-title-->
            <div class="container">
                <div id="content" class="site-content" role="main">
                    <div id="post-2516" class="post-2516 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="container">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1490339604805">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                        <div>
                                 <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="bod">
                      
                                <div class="row">

    <?php 
        if(!empty($faculty)){
                foreach ($faculty as $key => $f) {
                    if(!empty($f['cover_photo'])){
                    $cover_photo = base_url().'uploads/members/'.$f['cover_photo'];
                    }else{
                        $cover_photo = base_url().'/uploads/initial-images/person.png';
                    }
                    echo '<div class="col-md-4">
                        <div class="thm-profile">
                            <div class="thm-profile-img">
                                <img src="'.$cover_photo.'" alt="'.$f['full_name'].'" class="img-responsive" style="width: 100%;height: 318px;">
                            </div>
                    <div class="thm-profile-content">
                         <h3 class="thm-profile-title"><a href="'.base_url().'index.php/Arts/facultyMember?m='.$f['a_id'].'">'.$f['full_name'].'</a></h3>
                         <h5 class="thm-profile-sub-title" style="margin-top: -18px;">'.$f['position'].'</h5>
                                  
                         <div ></div>   
                        <ul class="thm-profile-social">                           
                        <li><a href="'.base_url().'index.php/Arts/facultyMember?m='.$f['a_id'].'">Detail&nbsp;<i class="fa fa-hand-o-right"></i></a></li>
                         </ul>
                        </div>
                    </div>
                </div> ';
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
                            </div>
                        </div>
                    </div>
                </div>
                <!--/#content-->
            </div>
       </section>