<?php
	if(!empty($aboutus)){
		$abt_id= $aboutus['0']['id'];
		$abt_title = $aboutus['0']['about_us_title'];
		$message = $aboutus['0']['description'];
		$fb = $aboutus['0']['fb_page_link'];
		$twi = $aboutus['0']['twit_page_link'];
		$cover_photo = base_url().'uploads/'.$aboutus['0']['cover_photo'];

	}else{
		$abt_id = '';
		$abt_title ='';
		$message ='';
		$cover_photo ='';
		$fb ='';
		$twi = '';
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
.fileinput {
    display: inline-block;
    margin-bottom: 9px;
    width: 100% !important;
}
.fileinput .thumbnail > img {
   height: 530px !important;
    width: 100% !important;
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
						<h3>School of Arts-KUSOA</h3>
					</div>
					<div class="panel-body">

						<?php echo form_open_multipart('Admin/updateaboutus');?><div class="row">

							<div class="form-group col-md-6">
							<input type="hidden" name="id" value="<?php echo $abt_id;?>" class="form-control"/>
								<label>About us title:</label>
								<input type="text" name="abttitle" value="<?php echo $abt_title;?>" class="form-control" placeholder="About our Journy" />
							</div>
							<div class="row col-md-12">
								<div class="col-md-6 form-group">
									<label>Facebook page link:</label>
								<input type="text" name="fblink" value="<?php echo $fb;?>" class="form-control" placeholder="www.facebook.com/kusoa Journy" />
								</div>
									<div class="col-md-6 form-group">
									<label>Twitter page link:</label>
								<input type="text" name="twilink" value="<?php echo $twi;?>" class="form-control" placeholder="www.twitter.com/kusoa" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="col-md-12 fileinput-new thumbnail" style=" max-height: 600px;"">
    <img src="<?php echo $cover_photo;?>" alt="cover photo">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 100%;">
  	
  </div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>
							</div>
					
							<div class="form-group col-md-12">
								<label>Description:</label>
								<textarea type="text" name="description" class="form-control"><?php echo $message;?>
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


