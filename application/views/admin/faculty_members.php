<style>
.graphs h3{
	text-align: center;
	padding-bottom: 50px;
	padding-top: 20px;
	color: #1F439B;
}
.col_3{
	min-height: 200px;
	background-color: #ffffff;
	margin-bottom: 20px;
	box-shadow: 0 1px 2px rgba(0,0,0,0.15) !important;
	transition: box-shadow 0.3s ease-in-out;
}
.col_3:hover{
	box-shadow: 0 5px 20px rgba(0,0,0,0.3) !important;
}
.col_3 h4{
	padding:25px 10px 10px 20px;
	color: #F44336;
}
.col_3 h4 span{
	color:#00aced;
	font-size: 12px;
}
.col_3  p{
	padding:0 30px 40px 30px;
}
.btn-new{
width: 100px;
padding: 10px;
border-radius: 4px;
background: #00aced;
color: #ffffff;
}
.single-box{
	padding-bottom: 20px;
}
.less{
	padding-left:28px;
}
</style>
<div id="page-wrapper">
	<div class="col-md-12 text-right">
			<a class="btn-new" href="<?php echo base_url();?>index.php/Admin/addmember"><i class="fa fa-plus"></i>
Faculty member</a>
		</div>
			 <?php if(isset($_SESSION['flash'])){
    echo '<div class="success"><strong style="color:#29a829;">'.$_SESSION['flash'].'</strong></div>';
    unset($_SESSION['flash']);

}
else{
    echo '';
}?>	
	<div class="graphs loading">
		<h3>Our Faculty Members</h3>
		
		<?php 
		if(!empty($faculty)){
			foreach ($faculty as $key => $f) {
			$make_short = strip_tags($f['description']);
			if(!empty($f['cover_photo'])){
				$cover_photo = base_url().'uploads/members/'.$f['cover_photo'];
			}else{
				$cover_photo = base_url().'/uploads/initial-images/person.png';
			}
			echo '<div class="col-md-5 single-box" id="r-'.$f['a_id'].'" style="border:1px solid #cdcdcd;margin:10px 45px 20px 45px;">
					<span class="remove" style="float: right;color: #fff;cursor: pointer;padding: 0 10px;background:#f01414;margin-right: -16px;" tb-name="faculty_members">X</span>
					<a href="'.base_url().'index.php/Admin/member?mid='.$f['a_id'].'"><span style="float: left;color: #ffffff;cursor: pointer;padding: 0 10px;background:#275ba8;margin-left: -16px;" tb-name="faculty_members"><i class="fa fa-pencil"></i></span></a>

					<img src="'.$cover_photo.'" class="img-responsive" style="width:100%;height:400px;padding-bottom:10px;"/>	
				<h4><span>'.$f['full_name'].'</span><br/>
				<span>'.$f['position'].'</span></h4>
				<div class="truncate">
				<p>'.$make_short.'</p></div>
			</div>';

		}
	}else{
		echo 'empty !';
	}
	?>
	<div style="margin-bottom: 100px;min-height: 50px;"> </div>
	<div class="clearfix"> </div>
</div>
<!--body wrapper start-->
</div>
	<!--body wrapper end-->
</div>
    <!--footer section start-->
	<!--footer section end-->
	<!-- main content end-->
</section>
