<?php
if(!empty($landing_program)){
  $full_program_name= $landing_program['0']['full_program_name'];
$first_program = $landing_program['0']['program'];
$first_level =  $landing_program['0']['level'];
$first_overview = $landing_program['0']['overview'];
$first_program_at_ku = $landing_program['0']['program_at_KU'];
$first_fees_and_funding = $landing_program['0']['fees_and_funding'];
$first_program_goals = $landing_program['0']['program_goals'];
$first_how_to_apply = $landing_program['0']['how_to_apply'];
if(!empty($landing_program['0']['program_duration'])){
$duration =  $landing_program['0']['program_duration'];
}else{
$duration = 'Not mention';
}
if(!empty($landing_program['0']['program_total_cost'])){
$cost = $landing_program['0']['program_total_cost'];
}else{
$cost = 'Not mention';
}
if(!empty($landing_program['0']['teaching_language'])){
$language= $landing_program['0']['teaching_language'];
}else{
$language = 'Not mention';
}

if(!empty($landing_program['0']['course_brochure'])){
$download_brochure = base_url().'uploads/'.$landing_program['0']['course_brochure'];
$download = '<h3> Download Course Detail PDF</h3>
    <a href="'.$download_brochure.'" class="btn  btn-success notice-btn" target="_blank"><span><i class="fa fa-cloud-download"></i> Download Course Brochure</span></a>';
}else{
$download_brochure ='';
$download = '';
} 



}else{
$first_program ='';
$first_level ='';
$under_graduate ='';
$first_overview ='';
$first_program_at_ku ='';
$first_fees_and_funding ='';
$first_how_to_apply ='';
$download_brochure ='';
$duration = '';
$cost = '';
$language ='';
$first_program_goals = '';
}

if(!empty($banner)){
        if($banner['3']['banner_of']==='graduation'){
            $b = base_url().'uploads/banner/'.$banner['3']['banner_name'];
        }
    }
?>
<style>
    .visitors-query p{
  text-align: center;
    font-size: 70px;
    color: #0a8d0a;
}
.visitors-query h4, .visitors-query h5{
  text-align: center;
    color: #43aa43;
}
  .course-rigister{
    margin-top:15px;
  }
</style>
<link rel='stylesheet' href='<?php echo base_url();?>assets/themes/wpeducon/css/program.css' type='text/css'  />

<div class="subtitle-cover sub-title" style="background-image:url('<?php echo $b;?>');background-size: cover;background-position: 50% 50%;">
        <div class="container">
            <div class="row">
               <div class="text-left col-md-8">
                <h2 class="page-leading">Admission</h2>
                   <h3 class="page-subleading">Graduate Programs</h3> 
<div class="text-center" style="margin-top: 5px;">
			<select name="" class="program-select" class="form-control">
      <option selected disabled hidden>Choose program</option>
<?php 
		if(!empty($programs)){
			foreach ($programs as $key => $pro) {
			 $full_program_name = $pro['full_program_name'];
			$pro_id = $pro['id'];
	
			
			echo '<option value="pro-'.$pro_id.'">'.$full_program_name.'</option>';
			}
		}else{
			echo 'No program available';
		}
		?>
			</select>
	</div>


                   </div>
                    </div>
                </div>
            </div>
<div class="container">
<div class="row">
	<div class="program-info">
		<div class="single-program-info">
			<article id="post-2102" class="post-2102 course type-course status-publish has-post-thumbnail hentry department-civilization department-mathematics semester-graduate semester-undergraduate coursetag-science">
				<div class="info-detail">
					<div class="entry-summary clearfix">
						<h4 id="program"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo $full_program_name;?></h4>
                       <!-- Blog author & comments -->
                                <ul class="blog-post-meta single-event-meta single-course-meta">
                                    
                                    <li><i class="fa fa-clock-o" aria-hidden="true" title="Duration"></i> <?php echo $duration;?></li>
                                    <li><i class="fa fa-graduation-cap" aria-hidden="true" title="Undergraduate"></i> <?php echo $first_level;?></li>
                                    <li><i class="fa fa-money" aria-hidden="true" title="Total Cost"></i>Rs. <?php echo $cost;?></li>
                                    <li><i class="fa fa-language" aria-hidden="true" title="Language"></i> <?php echo $language;?></li>
                                </ul>
						<h4>Overview</h4>
				<p><?php echo $first_overview;?></p>
				<h4><?php echo $first_program; ?> at Kathmandu University</h4>
        <p><?php echo $first_program_at_ku;?></p>
        <h4>FEES AND FUNDING</h4>
       <p><?php echo $first_fees_and_funding;?></p>
        <h4>THE GOALS</h4>
          <p><?php echo $first_program_goals;?></p>
       <h4>HOW TO APPLY</h4>
		<p><?php echo $first_how_to_apply;?></p>
   <?php echo $download;?>
		<br>
       <a class="btn btn-primary course-rigister" data-toggle="modal" data-target="#allProgram" id="my_choice">Register Now <i class="fa fa-angle-right"></i></a>
	 <div class="text-center">
        <p class="event-share-title">Share This Course</p>
            <ul class="event-social-share">
                <li><a href="#" class="prettySocial" data-type="facebook" data-url="http://soa.ku.edu.np/index.php?link=economics" data-title="Economics" data-description="Economics" data-media="<?php echo base_url();?>assets/uploads/2017/03/Courses5.jpg"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="prettySocial" data-type="twitter" data-url="http://soa.ku.edu.np/index.php?link=economics" data-title="Economics" data-description="Economics" data-media="<?php echo base_url();?>assets/uploads/2017/03/Courses5.jpg"><i class="fa fa-twitter"></i></a></li>
        </ul>
     </div>

					</div>	
				</div>
			</article>
			<div class="loading">
			<img src="<?php echo base_url();?>uploads/initial-images/loading.gif"/>

		</div>
		</div>
	</div>
	</div>
</div>


<!-- Registration Modal -->
<div id="allProgram" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg visitors-query">
<!-- Modal content-->
    <div class="modal-content visitors-info">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="title">Registration for:</h3>
      </div>
      <div class="panel-body">
        <form action="#" method="post" class="wpcf7-form" id="ApplyForm">
          <div class="col-sm-12" style="margin-bottom: 16px;">
            <select id="Courses" name="choosedProgram">  
          <?php 
            if(!empty($programs)){
              foreach ($programs as $key => $pro) {
                $full_program_name = $pro['full_program_name'];
                $pro_id = $pro['id'];
      
                echo '<option value="'.$full_program_name.'">'.$full_program_name.'</option>';
              }
            }else{
              echo 'No program available';
            }
          ?> 
          </select>
        </div>
           <div class="col-sm-4">
                    <div class="bg-contact"><span class="wpcf7-form-control-wrap"><input type="text" name="Vname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Full Name*"/></span></div>
                </div>
                 <div class="col-sm-4">
                <div class="bg-contact"><span class="wpcf7-form-control-wrap"><input type="email" name="Vemail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Your Email*" required="required"/></span></div>
            </div>
               <div class="col-sm-4">
            <div class="bg-contact"><span class="wpcf7-form-control-wrap"><input type="text" name="Vphone" value="" size="40" pattern="[0-9]{7,10}" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" min="7" max="10" placeholder="Your Phone Number*" title="Invalid text or Phone number is not valid."/></span></div>
        </div>
        <div class="col-sm-8">
    <div class="bg-contact"><span class="wpcf7-form-control-wrap"><textarea name="Vmessage" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span></div>
    </div>
    <div class="col-sm-12">
        <div class="contact-submit">                   
          <input type="submit" value="Register Now" class="btn btn-primary" /></div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>