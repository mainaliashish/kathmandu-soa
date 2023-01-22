<?php 
if(!empty($life)){
		$title = $life['0']['title'];
		$id = $life['0']['id'];
		$des = $life['0']['description'];
		$cover_photo = base_url().'uploads/'.$life['0']['cover_photo'];
}else{
	$id ='';
	$title ='';
		$des = '';
		$cover_photo ='';
}

?>


<style>
	h3{
		text-align: center;
		padding:5px;
	}
	.input-group{
		margin:0px !important;
	}
	label{
		font-size: 1.5em;
color: #f44336;
	}
	textarea{
	    width:100%;
	    height:400px !important;
	}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">	
					<div class="well">
						<?php echo form_open_multipart('Admin/updatelife');?>
						<?php if(isset($_SESSION['flash'])){
    echo '<span"><strong style="color:#29a829;margin-right: 100px;">'.$_SESSION['flash'].'</strong></span>';
    unset($_SESSION['flash']);

}

else{
    echo '';
}?>
		
						<div class="panel-header">
							<h3>UPDATE STUDENTS LIFE</h3>
						</div>
						<div class="panel-body">

							<div class="col-md-6">
								<div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    <img src="<?php echo $cover_photo;?>" alt="cover photo">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; ">
  	
  </div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div><input type="hidden" name="int" value="<?php echo $id;?>">
<div class="row form-group col-md-12">
<label for="title">Student life title</label>
<input type="text" class="form-control" name="title" value="<?php echo $title;?>">
</div>
							</div>
							<div class="form-group col-md-12">

								<label for="title">Description:</label>
								<textarea name="description" class="form-control"><?php echo $des;?></textarea>
							</div>
							<div class="row col-md-12 text-right">
								<div class="form-group">
							<button class="btn btn-success pull-right" style="margin-top:15px;">UPDATE</button>
								 	</div>
							</div>
						</div>
						
						</form>
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


