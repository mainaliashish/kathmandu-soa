<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/jasny-bootstrap.css">
<style>
	.slider{
		padding-bottom:32px;
		height: 187px;
		margin-bottom: 3px;
		}
		.section-header-title h3{
	text-align: center;
    color: #1590c1;
    padding-bottom: 25px;

}
/*my custom*/
.loading{
	margin:0;
	position: absolute;
	top: 40%;
	left: 50%;
	margin-right: -50%;
	transform: translate(-50%, -50%);
	display: none;
}
.loading img{
	height: 50px;
}
.off {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 20px;
  margin-top: -50px;
	margin-left: 10px;

}
/*off*/
.off input {display:none;}

.off-status {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #e71313;
  -webkit-transition: .4s;
  transition: .4s;
}

.off-status:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  bottom: 0px;
  left:0px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .off-status{
  background-color:#8BC34A;
}

input:focus + .off-status {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .off-status:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.off-status.round {
  border-radius: 20px;
}

.off-status.round:before {
  border-radius: 50%;
}

/*on*/
.on{
  position: relative;
  display: inline-block;
  width: 45px;
  height: 20px;
  margin-top: -50px;
	margin-left: 10px;

}

.on input {display:none;}

.on-status {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:#8BC34A;
  -webkit-transition: .4s;
  transition: .4s;
}

.on-status:after {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  bottom: 0px;
  right:0px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .on-status{
  background-color: #e71313;
}

input:focus + .on-status {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .on-status:after {
  -webkit-transform: translateX(-26px);
  -ms-transform: translateX(-26px);
  transform: translateX(-26px);
}

/* Rounded sliders */
.on-status.round {
  border-radius: 20px;
}

.on-status.round:after {
  border-radius: 50%;
}
.process{
	margin: 2px 0 0 50px;
	display: block;
	color:green;
}

</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="section-header-title">
			<h3>Slider Control Panel</h3>	
		</div>
		<div class="col-md-offset-2 col-md-10" style="margin-bottom:20px;">
		<?php echo form_open_multipart('Admin/sliderupload');?>
		<div class="form-group">
		<div class="fileinput fileinput-new input-group" data-provides="fileinput">
  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
			<button class="btn btn-success" style="padding:7px;margin-left:8px;">Upload</button>
			 <?php if(isset($_SESSION['flash'])){
    echo '<div class="col-md-offset-4 col-md-4 success"><strong style="color:#29a829;">'.$_SESSION['flash'].'</strong></div>';
    unset($_SESSION['flash']);

}
else{
    echo '';
}?>
			</div>
		</form>
		</div>
		<div class="col_3">		
	<?php 
		foreach ($slider as $key => $s_img) {
			$img_id= $s_img['s_id'];
			$slider = base_url().'uploads/slider/'.$s_img['image_name'];
			$is_enable = $s_img['flag'];

			if($is_enable==1){
						echo '<div class="col-md-4 switch-right" id="s-'.$img_id.'">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
					<span class="delete" style="position: absolute;color: #fff;cursor: pointer;padding: 0 3px;background:#f01414;">X</span>
							<img src="'.$slider.'" class="img-responsive slider"/>
							<label class="on">
  								<input type="checkbox" class="s_flag" value="'.$s_img['flag'].'">
  								<div class="on-status round"></div>			
							</label>
						</div>
					</div>
				</div>';
					}else{
						echo '<div class="col-md-4 switch-right" id="s-'.$img_id.'">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
						<span class="delete" style="position: absolute;color: #fff;cursor: pointer;padding: 0 3px;background:#f01414;">X</span>
							<img src="'.$slider.'" class="img-responsive slider"/>
							<label class="off">
  								<input type="checkbox" class="s_flag" value="'.$s_img['flag'].'">
  								<div class="off-status round"></div>
								</label>
						</div>
					</div>
				</div>';
					}
			}				
		?>			
	</div>
	<div class="loading">
			<img src="<?php echo base_url();?>uploads/initial-images/loading.gif"/>

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