<?php 
    if(!empty($banner)){
        if($banner['6']['banner_of']==='news'){
            $b = base_url().'uploads/banner/'.$banner['6']['banner_name'];
        }
    }
?>
           <style>
        .notice-list-meta-date,.themeum-pagination ul li a:hover{
            background-color: #ed1c24 !important;
        }
    </style>
         <section id="main">
            <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">News</h2>
                            <h3 class="page-subleading">KUSOA News</h3> </div>
                    </div>
                </div>
            </div>
            <!--/.sub-title-->
            <div class="container">
                <div id="content" class="site-content" role="main">
                    <div id="post-2640" class="post-2640 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1490340323545">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="themeum-notice-wrap">


                        <?php
                        if(!empty($news)){
                            foreach ($news as $key => $ann) {
 $posted_date = $ann['posted_date'];
 $cdate = new DateTime($posted_date);
  $y =    $cdate->format("Y");
   $mon =    $cdate->format("M");
    $day =    $cdate->format("d");

        
                               
                        echo '<div class="themeum-notice-list"><span class="notice-list-meta-date"><span>'.$day.'</span>'.$mon.', '.$y.'</span>
                                <div class="thm-notice-data">
                                 <h4 class="notice-list-title"><a href="'.base_url().'index.php/Arts/singleNews?wid='.$ann['a_id'].'">'.$ann['news_title'].'</a></h4></div>
                                <div class="readmore-wrap"><a href="'.base_url().'index.php/Arts/singleNews?wid='.$ann['a_id'].'" class="btn btn-primary">Read More</a></div>
                            </div>';
                        }
                    }else{
                        echo "No news availabel";
                    }
                        ?>        
 <!-- Show pagination links -->
 <div class="themeum-pagination">
     <ul class="pagination page-numbers">
          <?php foreach ($links as $link) {

          echo "<li class='page-numbers'>". $link."</li>";
          } ?>
          </ul>
          </div>
      <!-- **************************************************** -->








               <!--      <div class="themeum-pagination">
                        <ul class='page-numbers'>
                            <li><span class='page-numbers'>1</span></li>
                            <li><a class='page-numbers' href='#'>2</a></li>
                            <li><a class='page-numbers' href='#'>3</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> -->
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