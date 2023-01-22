<style>
	h3{
		text-align: center;
		padding:5px;
	}
	.input-group{
		margin:0px !important;
		width: 100%;
	}
	label{
		font-size: 1.5em;
color: #f44336;
	}
	textarea{
	    width:100%;
	  min-height: 20em;
	}
	input[type="text"]{
	border-radius: 0px !important;
}
.fileinput .thumbnail > img {
   height: 530px !important;
    width: 100% !important;
}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">	
					<div class="well">
						 <?php if(isset($_SESSION['flash'])){
    echo '<span"><strong style="color:#29a829;margin-right: 100px;">'.$_SESSION['flash'].'</strong></span>';
    unset($_SESSION['flash']);

}

else{
    echo '';
}?>
						<?php echo form_open_multipart('Admin/insert_event');?>
						<div class="panel-header">
							<h3>ADD UPCOMMING EVENT</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="title">Event title:</label>
								<input type="text" class="form-control" name="etitle" required="required" />
							</div><div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4 form-group">
                <label for="dtp_input1" class="control-label">Event start time:</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly name="sdate">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
						<div class="col-md-4 form-group">
                <label for="dtp_input1" class="control-label">Event end time:</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" name="edate" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
							<div class="col-md-12">
								<label for="title">Event cover photo:</label>
								<div class="row">
			<div class="fileinput fileinput-new" data-provides="fileinput" style="margin-left: 15px;">
  <div class="fileinput-new thumbnail" style=" height:150px;max-height: 400px;min-width: 150px;">
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
							</div>
								</div></div>
							</div>
							<div class="form-group">
								<label for="title">Event description:</label>
								<textarea name="descrption" class="form-control"></textarea>
							</div>
							<div class="row col-md-12 text-right">
								<div class="form-group">
							<button class="btn btn-success pull-right" style="margin-top:15px;">PUBLISH</button>
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
