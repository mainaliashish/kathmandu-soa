<?php 
if(!empty($announcement)){
   $a_title= $announcement['0']['a_title'];
$description= $announcement['0']['a_description'];
if(!empty($announcement['0']['a_pdf'])){

    $pdf = '<h3>Download PDF</h3>
            <a href="'.base_url().'uploads/notice/'.$announcement['0']['a_pdf'].'" target="_blank" class="btn  btn-success notice-btn"><i class="fa fa-cloud-download"></i> Download</a>';
}else{
    $pdf='';
}

 $posted_date = $announcement['0']['posted_date'];
 $cdate = new DateTime($posted_date);
    $y =  $cdate->format("Y");
    $mon =    $cdate->format("M");
    $day =    $cdate->format("d");   
}else{
    $a_title='';
    $description='';
    $a_pdf='';
    $pdf='';
    $posted_date = '';  
}
if(!empty($banner)){
        if($banner['5']['banner_of']==='announcement'){
            $b = base_url().'uploads/banner/'.$banner['5']['banner_name'];
        }
    }
?>


<style>
    .educon-blog-date {
    background: #ed1c24 !important;
}
</style>
        <section id="main" class="blog-wrappers-content">
            <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">Announcement Details</h2>
                            <h3 class="page-subleading"><?php echo $a_title;?> </h3> </div>
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
                     <?php echo $a_title;?>                                                                                                 </h2>
                                <!-- //.entry-title -->
                            </div>
                            <!-- Blog title End -->
                            <div class="entry-blog">
                                <!-- Single Page content -->
                                <div class="entry-summary clearfix">
                                    <p><?php echo $description;?></p>
                                    <?php echo $pdf;?>
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