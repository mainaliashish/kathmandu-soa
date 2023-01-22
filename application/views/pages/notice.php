<?php 
if(!empty($notice)){
   $notice_title= $notice['0']['notice_title'];
$description= $notice['0']['description'];
$notice_pdf= base_url().'uploads/'.$notice['0']['notice_pdf'];
$banner = base_url().'uploads/notice'.$notice['0']['banner'];

 $posted_date = $notice['0']['posted_date'];
 $cdate = new DateTime($posted_date);
//$strip = $cdate->format('Y-m-d');
  $y =    $cdate->format("Y");
   $mon =    $cdate->format("M");
    $day =    $cdate->format("d");   
}else{
 $notice_title='';
    $description='';
    $notice_pdf='';
    $banner='';
    $posted_date = '';
}
?>

        <section id="main" class="blog-wrappers-content">
            <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $banner;?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">Notice Details</h2>
                            <h3 class="page-subleading"><?php echo $notice_title;?> </h3> </div>
                    </div>
                </div>
            </div>
            <!--/.sub-title-->
            <div class="container">
                <div class="row">
                    <div id="content" class="site-content col-sm-12 blog-content-wrapper" role="main">
                        <article id="post-2897" class="thm-single-notice post-2897 notice type-notice status-publish hentry notice-category-result">
                            <!-- image Thumbnail -->
                            <!-- Blog date -->
                            <div class="educon-blog-date">
                                <?php echo $day;?><br/><span><?php echo $mon.' '.$y;?></span>
                            </div>
                            <!-- end date -->
                            <!-- Blog author & comments -->
                           
                            <!-- Blog Title -->
                            <div class="entry-header">
                                <h2 class="entry-title blog-entry-title">
                     <?php echo $notice_title;?>                                                                                                 </h2>
                                <!-- //.entry-title -->
                            </div>
                            <!-- Blog title End -->
                            <div class="entry-blog">
                                <!-- Single Page content -->
                                <div class="entry-summary clearfix">
                                    <p><?php echo $description;?></p>
                                    <h3>Download PDF</h3>
                                    <a href="<?php echo $notice_pdf;?>" target="_blank" class="btn  btn-success notice-btn"><i class="fa fa-cloud-download"></i> Download</a>
                                </div>
                                <!-- //.entry-summary -->
                            </div>
                        </article>
                        <!--/#post-->
                        <div class="clearfix"></div>
                    </div>
                    <!-- #content -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>