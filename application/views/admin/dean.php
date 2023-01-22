<?php
	if(!empty($dean)){
		$dean_id = $dean['0']['id'];
		$dean_name = $dean['0']['full_name'];
		$mtitle =  $dean['0']['message_title'];
		$message = $dean['0']['message'];
		$cover_photo = base_url().'uploads/university-member/'.$dean['0']['cover_photo'];
	}else{
		$dean_id = '';
		$dean_name ='';
		$mtitle = '';
		$message ='';
		$cover_photo ='';
	}
?>
<style>
textarea{
	min-height: 20em;
}
h3{
	text-align: center;
	padding:15px 0 0 0; 
}
label{
	font-size: 16px;
	color:#ec3b3b;
}
input[type="text"]{
	border-radius: 0px !important;
}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">
		 <?php if(isset($_SESSION['flash'])){
    echo '<div class="col-md-offset-4 col-md-4 success"><strong style="color:#29a829;">'.$_SESSION['flash'].'</strong></div>';
    unset($_SESSION['flash']);

}
else{
    echo '';
}?>	
				<div class="col-md-offset-1 col-md-10 well">
					<div class="panel-header">
						<h3>Message from Dean</h3>
					</div>
					<div class="panel-body">

						<?php echo form_open_multipart('Admin/updatedean');?><div class="row">

							<div class="form-group col-md-6">
							<input type="hidden" name="id" value="<?php echo $dean_id;?>" class="form-control"/>
								<label>Full Name:</label>
								<input type="text" name="fullName" value="<?php echo $dean_name;?>" class="form-control"/>
							</div>
							<div class="col-md-6">
								<div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    <img src="<?php echo $cover_photo;?>" alt="cover photo">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
  	
  </div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>
							</div>
							<div class="form-group col-md-12">
								<label>Message title:</label>
								<input type="text" name="mtitle" value="<?php echo $mtitle;?>" class="form-control"/>
							</div>
							<div class="form-group col-md-12">
								<label>Message:</label>
								<textarea type="text" name="message" class="form-control"><?php echo $message;?>
								</textarea>
							</div></div>
							<div class="form-group">
								<button class="btn btn-primary pull-right">
									UPDATE
								</button>
							</div>
						<?php echo form_close();?>
					</div>
				</div>


		<div class="clearfix"> </div>
	</div>
</div>
<!--body wrapper start-->
</div>
	<!--body wrapper end-->
</div>
    <!--footer section start-->
	<!--footer section end-->
	<!-- main content end-->
</section>			


