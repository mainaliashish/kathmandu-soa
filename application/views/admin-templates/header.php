<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel | K.U. University</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="K.U. University | School of Arts" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />


<!-- Custom CSS -->
<link href="<?php echo base_url();?>bootstrap/css/style.css" rel='stylesheet' type='text/css' media="all"/>

<!-- editor -->
 <script src="<?php echo base_url();?>text-editor/tinymce.min.js"></script> 
    <script>
        tinymce.init({selector:'textarea'});
    </script>
<!-- end editor -->

<!-- Graph CSS -->
<link href="<?php echo base_url();?>bootstrap/css/font-awesome.min.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->

<!--animate-->
<link href="<?php echo base_url();?>bootstrap/css/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- datepicker -->
<link href="<?php echo base_url();?>bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<!-- <script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>   -->
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
 <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/jasny-bootstrap.css">
</head> 
 <body class="sticky-header left-side-collapsed">
    <section>
    <!-- left side start-->
	<div class="left-side sticky-left-side">
		<!--logo and iconic logo start-->
		<div class="logo">
			<h1><a href="<?php echo base_url();?>index.php/Arts" target="_blank">Atrs <span>Admin</span></a></h1>
		</div>
		<div class="logo-icon text-center">
			<a href="<?php echo base_url();?>index.php/Arts" target="_blank"><i class="lnr lnr-home"></i> </a>
		</div>

	<!--logo and iconic logo end-->
	<div class="left-side-inner">
	<!--sidebar nav start-->
	<ul class="nav nav-pills nav-stacked custom-nav">
			<li class="active"><a href="<?php echo base_url();?>index.php/Admin"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
			<li><a href="<?php echo base_url();?>index.php/Admin/inbox"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
							<ul class="sub-menu-list">
								<li><a href="<?php echo base_url();?>index.php/Admin/inbox">Inbox</a> </li>
								<li><a href="<?php echo base_url();?>index.php/Admin/composemail">Compose Mail</a></li>
							</ul>
						</li>
			<li><a href="<?php echo base_url();?>index.php/Admin/slider"><<i class="fa fa-sliders"></i><span>Slider</span></a></li>

			<li class="menu-list"><a href="#"><i class="fa fa-graduation-cap"></i><span>Academics</span></a> 
				<ul class="sub-menu-list">
					<li class="undrgdr"><a href="<?php echo base_url();?>index.php/Admin/bachelorPrograms">Undergraduate Programs</a> </li>
				<li class="gdr"><a href="<?php echo base_url();?>index.php/Admin/masterPrograms">graduate Programs</a></li>
				<li class="gdr"><a href="<?php echo base_url();?>index.php/Admin/programcover">Change Program Cover Photo</a></li>
				</ul>
			</li>
			
			<li><a href="<?php echo base_url();?>index.php/Admin/faculty"><i class="fa fa-user"></i><span>Faculty</span></a></li>
			
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
	<!-- main content start-->
	<div class="main-content">
	<!-- header-starts -->
		<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

<!--notification menu start -->
<div class="menu-right">
	<div class="user-panel-top">  	
		<div class="profile_details_left">
			<ul class="nofitications-dropdown">
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"><?php echo $count_mgs;?></span></a>
					<ul class="dropdown-menu">
						<li>
							<div class="notification_header">
							<h3>You have <?php echo $count_mgs;?> new messages</h3>
							</div>
						</li>
					<?php 
					if(!empty($abbr_mgs)){
						foreach ($abbr_mgs as $key => $msg) {

		$short_desc = strip_tags($msg['message']);
		$message = substr($short_desc,0,20);

							 $hrsm = $msg['date'];
							$date = date("M-d-Y",strtotime($hrsm)); 

						echo '<li><a href="'.base_url().'index.php/Admin/inboxMail?smail='.$msg['v_id'].'" class="checked-m">
							<div class="user_img">
							<i class="fa fa-envelope fa-2x"></i>
							</div>
							<div class="notification_desc">
								<p>'.$message.'</p>
								<p><span>'.$date.'</span></p>
							</div>
							<div class="clearfix"></div>	
						</a></li>';
						}
						echo '<div class="notification_bottom">
								<a href="'.base_url().'index.php/Admin/inboxMail">See all messages</a>
							</div>';
					}else{
						echo '<div class="notification_bottom">
								<a href="#">No new message arrived !!</a>
							</div>';
					}
					?>
			<li> 
	</li>
</ul>
</li>



							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
		<span ><img src="<?php echo base_url();?>bootstrap/images/milan.png"/> </span> 
										 <div class="user-name">
											<p>Admin<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu"> 
									<li> <a href="<?php echo base_url();?>index.php/Admin/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>


								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->

