<?php
if(!empty($contact)){
	$id = $contact['0']['id'];
    $university_name = $contact['0']['university_name'];
    $full_location = $contact['0']['full_location'];
    $pos_box_num = $contact['0']['post_box_num'];
    $con1 = $contact['0']['contact_information1'];
    $con2 = $contact['0']['contact_information2'];
    $web_link = $contact['0']['web_site_link'];

}else{
    $university_name = '';
    $full_location = '';
    $pos_box_num = '';
    $con1 = '';
    $cont2 = '';
    $web_link ='';
    $banner = '';
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
						<h3>KUSOA-CONTACT INFORMATION</h3>
					</div>
					<div class="panel-body">

						<?php echo form_open_multipart('Admin/updateinfo');?><div class="row">

							<div class="form-group col-md-6">
							<input type="hidden" name="id" value="<?php echo $id;?>" class="form-control"/>
								<label>University name:</label>
								<input type="text" name="uni" value="<?php echo $university_name;?>" class="form-control" placeholder="college name" />
							</div>
								<div class="form-group col-md-6">
							
								<label>Full location:</label>
								<input type="text" name="loc" value="<?php echo $full_location;?>" class="form-control" placeholder="Tour title" />
							</div>
							<div class="form-group col-md-6">
							
								<label>Post Box number:</label>
								<input type="text" name="po" value="<?php echo $pos_box_num;?>" class="form-control" placeholder="6250" />
							</div>
							<div class="form-group col-md-6">
							
								<label>Contact number-1:</label>
								<input type="text" name="con1" value="<?php echo $con1;?>" class="form-control" placeholder="+977-01-000000" />
							</div>
							<div class="form-group col-md-6">
							
								<label>Contact number-2:</label>
								<input type="text" name="con2" value="<?php echo $con2;?>" class="form-control" placeholder="+977-01-000000" />
							</div>
							<div class="form-group col-md-6">
							
								<label>Website link:</label>
								<input type="text" name="web" value="<?php echo $web_link;?>" class="form-control" placeholder="www.kuart.com.np" />
							</div>						
						</div>
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


