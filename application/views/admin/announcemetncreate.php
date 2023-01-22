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
	    height:250px;
	}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">	
					<div class="well">
						<?php echo form_open_multipart('Admin/insert_announcement');?>
						<div class="panel-header">
							<h3>ADD NEW ANNOUNCEMENT</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="title">Title:</label>
								<input type="text" class="form-control" name="tann" required="required" />
							</div>
							<div class="form-group">
								<label for="title">Description:</label>
								<textarea name="descrption" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<div class="row col-md-12">
									<label for="title">Description in PDF:</label>
								</div>
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
							</div>
							<div class="row col-md-12 text-right">
								<div class="form-group">
							<button class="btn btn-success pull-right" style="margin-top:15px;">PUBLISH</button>
								 <?php if(isset($_SESSION['flash'])){
    echo '<span"><strong style="color:#29a829;margin-right: 100px;">'.$_SESSION['flash'].'</strong></span>';
    unset($_SESSION['flash']);

}

else{
    echo '';
}?>
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


