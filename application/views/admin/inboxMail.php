<style>
	.form-group{
	margin-bottom: 0px !important;
	}
	.header h4{
		font-size: 2em;
		color:#F44336;
		text-align: center;
		text-transform: uppercase;
	}
	.view-msg label{
		font-size: 16px;
		font-weight: 500;
		letter-spacing: 1px;
		padding-right: 6px;
	}
	.view-msg p{
	padding-bottom: 15px;
	text-align:justify;
	}
	.activity-desc{
		cursor: pointer;
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
.btn-new{
width: 75px;
padding: 5px;
border-radius: 4px;
background: #00aced;
color: #ffffff;
float: right;
text-align: center;
}
.btn-new:hover{
	color: #ffffff;
}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">	
					
			<div class="col-md-4 span_8">
							<div class="activity_box">
								<h3>Inbox</h3>
								<div class="scrollbar scrollbar1" id="style-2">
								<?php 
									if(!empty($ms)){
						foreach ($ms as $key => $msg) {
								$short_desc = strip_tags($msg['message']);
								$message = substr($short_desc,0,20);
								$hrsm = $msg['date'];
							$date = date("M-d-Y",strtotime($hrsm)); 

							if($msg['email_sent']==='1'){
									$c =  "Replied.";
							}else{
								$c = "Not replied.";
							}
									echo '<div class="activity-row">
										<div class="col-xs-3 activity-img"><i class="lnr lnr-envelope fa-2x"></i></div>
										<div class="col-xs-7 activity-desc you-clicked" name="mail-'.$msg['v_id'].'">
											<h5><a>'.$msg['full_name'].'</a></h5>
											<p>'.$message.'....'.'</p>
											<p>You:&nbsp;'.$c.'</p>
										</div>
										<div class="col-xs-2 activity-desc1"><h6>'.$date.'</h6></div>
										<div class="clearfix"> </div>
									</div>';
								}
							}else{
								echo "No message available !!";
							}
									?>
								</div>
							</div>
						</div>
						<div class="col-md-7 mail-display" style="height: 50px;min-height: 500px;">
							<div class="row">
						<?php 
							if(!empty($mess)){
						echo '<div class="well mailvisitor">
								<div class="panel-header header">
									<h4><i class="lnr lnr-envelope fa-2x"></i></h4>
								</div>
								<div class="panel-body view-msg">
									<div class="form-group">
										<label>Full Name:</label>'.$mess['0']['full_name'].'
									</div>
									<div class="form-group">
										<label>Contact Number:</label>'.$mess['0']['phone_no'].'
									</div>
									<div class="form-group">
										<label>Registered Program:</label>'.$mess['0']['program'].'
										<div class="form-group">
										<label>Email:</label>
										'.$mess['0']['email'].'
									</div>
									<div class="form-group">
										<label>Message:</label>
										'.$mess['0']['message'].'
									</div>
									<a href="'.base_url().'index.php/Admin/mailreply?mailkey='.$mess['0']['v_id'].'" class="btn-new"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
									</div>
								</div>
						</div>';
					}else{
						echo '<center><h2>Select email first !</h2></center>';
					}
						?>
						</div></div>
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


