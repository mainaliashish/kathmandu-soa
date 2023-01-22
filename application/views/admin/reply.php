<?php
	if(!empty($address)){
		$rname = $address['0']['full_name'];
		$remail = $address['0']['email'];
		$key= $address['0']['v_id'];
	}else{
		$rname ='';
		$remail = '';
		$key = '';
	}
?>
<style>
	.input-group{
		margin: 0 0 0 0 !important;
	}
	textarea{
		min-height: 15em;
	}
	input[type=text]{
		border: 1px solid #cdcdcd;
		border-radius: 0px !important;
	}
	label{
		font-size: 14px;
	}
	h4{
		
		padding-top: 8px;
		color: green;
	}
		.mailvisitor{
		border-radius: 0px !important;
		background: #ffffff;
		box-shadow: 0 1px 2px rgba(0,0,0,0.15) !important;
		transition: box-shadow 0.3s ease-in;
	}
	.mailvisitor:hover{
	box-shadow: 0 5px 15px rgba(0,0,0,0.3) !important;
}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">	
			<div class="inbox_right">
				<div class="col-md-offset-1 col-md-10">
					<?php echo form_open_multipart('Admin/postmail');?>
					<div class="well mailvisitor">
						<div class="panel-header panel-heading">
							<h4>Compose new message</h4>
							<?php if(isset($_SESSION['flash'])){
    echo '<span"><strong style="color:#29a829;margin-right: 100px;">'.$_SESSION['flash'].'</strong></span>';
    unset($_SESSION['flash']);

}

else{
    echo '';
}?>
						</div>
						<div class="alert alert-info">
							Please fill details to send a new message
										</div>
						<div class="panel-body">
							<div class="form-group">
							<input type="hidden" name="mailkey" value="<?php echo $key;?>">
								<label>Recipient name:</label>
								<input type="text" class="form-control" name="rname" required="required" value="<?php echo $rname;?>" />
							</div>
							<div class="form-group">
								<label>Enter subject:</label>
								<input type="text" class="form-control" name="subject" required="required"/>
							</div>
							<div class="form-group">
								<label>Enter email:</label>
								<input type="text" class="form-control" name="remail" required="required" value="<?php echo $remail;?>"/>
							</div>
							<div class="form-group">
								<label>Enter message:</label>
								<textarea type="text" class="form-control" name="rmessage"></textarea>
							</div>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
  					<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
  					<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
  					<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				</div>
							<div class="form-group">
								<button class="btn btn-primary pull-right">SEND</button>
							</div>
						</div>
					</div>
					<?php echo form_close();?>
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

