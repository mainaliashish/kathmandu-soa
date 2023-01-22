<?php
	if(!empty($faculty)){
		$a_id= $faculty['0']['a_id'];
		$full_name =$faculty['0']['full_name'];
$position = $faculty['0']['position'];
$location = $faculty['0']['location'];
$trainings = $faculty['0']['trainings'];
$Academic_qualification = $faculty['0']['Academic_qualification'];
	 if(!empty($f['cover_photo'])){
                    $cover_photo = base_url().'uploads/members/'.$f['cover_photo'];
                    }else{
                        $cover_photo = base_url().'/uploads/initial-images/person.png';
                    }
$website = $faculty['0']['website'];
$phone_num = $faculty['0']['phone_num'];
$email = $faculty['0']['email'];
$department = $faculty['0']['department'];
$description = $faculty['0']['description'];
$lat = $faculty['0']['latitude'];
$lon = $faculty['0']['longitude'];
	}else{
	$a_id='';
$full_name = '';
$position = '';
$location = '';
$trainings = '';
$Academic_qualification = '';
$cover_photo = '';
$website = ''; 
$phone_num = '';
$email = '';
$department = '';
$lat = '';
$lon = '';
$description ='';
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
   height: 220px !important;
    width: 250px !important;
    min-width: 250px !important;
}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">
				<div class="col-md-offset-1 col-md-10 well">
					<div class="panel-header">
						<h3>Faculty member -KUSOA</h3>
					</div>
					<div class="panel-body">

						<?php echo form_open_multipart('Admin/updatefaculty');?><div class="row">
						<input type="hidden" value="<?php echo $a_id;?>" name="mid">
							<div class="col-md-12">
	<div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="col-md-4 fileinput-new thumbnail" style=" max-height: 220px;">
    <img src="<?php echo $cover_photo;?>" alt="cover photo">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 250px; max-height: 220px;">
  	
  </div>
  <div>
  <div class="col-md-12">
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>
</div>
</div>
	<div class="form-group col-md-6">
			<input type="hidden" name="id" value="" class="form-control"/>
				<label>Full name:</label>
				<input type="text" name="fname" value="<?php echo $full_name;?>" class="form-control" placeholder="full name" required="required" />
	</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Position:</label>
					<input type="text" name="pos" value="<?php echo $position;?>" class="form-control" placeholder="Assistance professor" />
			</div></div>
			<div class="form-group col-md-6">
				<input type="hidden" name="id" value="" class="form-control"/>
					<label>Department:</label>
					<input type="text" name="dpt" value="<?php echo $department;?>" class="form-control" placeholder="School of arts" />
			</div>
			<div class="form-group col-md-6">
				<input type="hidden" name="id" value="" class="form-control"/>
					<label>Contact number:</label>
					<input type="text" name="cnum" value="<?php echo $phone_num;?>" class="form-control" placeholder="+977-01-9999999, 9800000000" />
			</div>
			<div class="form-group col-md-6">
				<input type="hidden" name="id" value="" class="form-control"/>
					<label>Email address:</label>
					<input type="text" name="email" value="<?php echo $email;?>" class="form-control" placeholder="abc@gmail.com" />
			</div>
			<div class="form-group col-md-6">
				<input type="hidden" name="id" value="" class="form-control"/>
					<label>Location:</label>
					<input type="text" name="loc" value="<?php echo $location;?>" class="form-control" placeholder="Jawalakhel, Nepal" />
			</div>
			<div class="form-group col-md-6">
				<input type="hidden" name="id" value="" class="form-control"/>
					<label>Website link:</label>
					<input type="text" name="web" value="<?php echo $website;?>" class="form-control" placeholder="http://www.myweb.com.np" />
			</div>
			<div class="form-group col-md-3">
				<input type="hidden" name="id" value="" class="form-control"/>
					<label>latitude:</label>
					<input type="text" name="lat" value="<?php echo $lat;?>" class="form-control" placeholder="27.6680669" />
			</div>
			<div class="form-group col-md-3">
					<label>longitude:</label>
					<input type="text" name="lon" value="<?php echo $lon;?>" class="form-control" placeholder="85.3076646" />
			</div>
		</div>
		<div class="form-group">
				<label>Academic Qualification:</label>
				<textarea type="text" name="qual" class="form-control"><?php echo $Academic_qualification;?>
			</textarea>
	</div>	
	<div class="form-group">
				<label>Training:</label>
				<textarea type="text" name="train" class="form-control"><?php echo $trainings;?>
			</textarea>
	</div>				
			<div class="form-group">
				<label>Short Biography:</label>
				<textarea type="text" name="description" class="form-control"><?php echo $description;?>
								</textarea>
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


