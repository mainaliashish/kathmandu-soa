<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title;?></title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/font-awesome.min.css');  ?>">
  <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
   <!-- custom css files  -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/custom_milan.css'); ?>">
 <!-- end of custom files -->
</head>
<body>
    <div class="container">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        	<div class="mainPannel">
        		<div class="titleLogin">
                    <h4>K.U. School of Arts</h4>
        			<h1>ADMIN LOGIN</h1>
        		</div>
			<?php echo form_open('Arts/admin'); ?>
			<form>
			<div class="loginFormInput">
				<div class="form-group">
        			<label for="Username">Usename</label>
        			<input name="username"  type="text" class="form-control user-name" placeholder="Username" autocomplete="off" required="required">
<span style="color: #ea6549;font-size: 16px;"><?php echo form_error('username');?></span>	
        		</div>
        		<label for="Password">Password</label>
        			<input name="password" " type="password" class="form-control user-password" placeholder="Password" required="required" />	
                    <span style="color: #ea6549;font-size: 16px;"><?php echo form_error('password');?></span>
        			<div class="row">
        				<div class="col-xs-3 col-sm-2 col-md-3"></div>
        				<div class="col-xs-6 col-sm-8 col-md-6">
        						<!-- <a class="loginGoBtn">Go</a> -->
        						<input type="submit" value="Go" class="loginGoBtn">
			        				<div class="forgotPassword">
			        					<a>Forgot Password ?</a>	
			        				</div>
        				</div>
        				<div class="col-xs-3 col-sm-2 col-md-3"></div>
        			</div>
        <?php if(isset($_SESSION['flash'])){
            echo '<strong style="color:#ea3e10;font-size: 12px;">'.$_SESSION['flash'].'</strong>';
            unset($_SESSION['flash']);
            }
        else{
            echo '';
        }
        ?>
			</div>
        		<!-- <form class="loginFormInput" method=""> -->
        		</form>	
        	</div>
        	
        </div>
        <div class="col-sm-4"></div>
    </div>
    </body>
    </html>