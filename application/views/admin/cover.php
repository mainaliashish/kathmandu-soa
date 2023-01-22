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
   height: 300px !important;
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
						<h3>KUSOA Programs</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('Admin/coverphoto');?><div class="row">
							<div class="col-md-6">
								<div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="col-md-12 fileinput-new thumbnail" style=" max-height: 300px;"">
    <img src="" alt="cover photo">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 100%;">
  	
  </div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>
</div>
<div class="col-md-6">
	<select name="banner" class="form-control">
	<option selected disabled hidden>Select Program You want to Change..</option>
		<?php
		foreach ($cover as $key => $v) {
			echo '<option value="'.$v['id'].'">'.$v['full_program_name'].'</option>';
		}
		
		?>
		
	</select>
	<div class="form-group" style="margin-top: 25px;">
			<button class="btn btn-primary pull-right">
						UPDATE
			</button>
	</div>
</div>
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


