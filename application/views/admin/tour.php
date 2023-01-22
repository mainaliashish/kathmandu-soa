<?php
	if(!empty($tour)){
		$id= $tour['0']['id'];
		$title = $tour['0']['title'];
		$vlink = $tour['0']['link'];
		$message = $tour['0']['description'];
	}else{
		$id = '';
		$title ='';
		$message ='';
		$vlink = '';
		
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
						<h3>Tour-KUSOA</h3>
					</div>
					<div class="panel-body">

						<?php echo form_open_multipart('Admin/updatetour');?><div class="row">

							<div class="form-group col-md-6">
							<input type="hidden" name="id" value="<?php echo $id;?>" class="form-control"/>
								<label>College tour title:</label>
								<input type="text" name="tour" value="<?php echo $title;?>" class="form-control" placeholder="Tour title" />
							</div>
								<div class="form-group col-md-6">
							
								<label>Video link:</label>
								<input type="text" name="vlink" value="<?php echo $vlink;?>" class="form-control" placeholder="Tour title" />
							</div>						
							<div class="form-group col-md-12">
								<label>Short description:</label>
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


