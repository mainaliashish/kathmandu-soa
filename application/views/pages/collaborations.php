<?php 
if(!empty($col)){
		$des = $col['0']['description'];
		$coll= $col['0']['collaboration'];
}else{
	$coll ='';
	$des = '';
}
  if(!empty($banner)){
        if($banner['2']['banner_of']==='collaboration'){
            $b = base_url().'uploads/banner/'.$banner['2']['banner_name'];
        }
    }
?>

<section id="main" class="blog-wrappers-content">
            <div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="text-left col-md-8">
                            <h2 class="page-leading">Collaborations</h2>
                             </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div id="content" class="site-content col-sm-12 blog-content-wrapper" role="main">
                        <div class="single-profile-wrap">
                            
                            <div class="thm-sp-content">
                                
                                <?php echo $des;?>
                                </div>

                                <div class="row">
                                <div class="col-md-5">
                                    <div class="thm-sp-content"><?php echo $coll;?></div>
                                </div>
                                
                            </div>

                               
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- #content -->
                 </div>
            </section>