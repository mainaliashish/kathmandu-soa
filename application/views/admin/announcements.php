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
</style>
<div id="page-wrapper">
	<div class="col-md-12 text-right">
			<a class="btn-new" href="<?php echo base_url();?>index.php/Admin/createannouncement"><i class="fa fa-plus"></i>
New Announcement</a>
		</div>
	<div class="graphs loading">
		<h3>Our Announcement</h3>
		
		<?php 

		if(!empty($anns)){
			foreach ($anns as $key => $a) {
			$make_short = $a['a_description'];

			echo '<div class="col_3 single-box" id="r-'.$a['a_id'].'">
					<span class="remove" style="float: right;color: #fff;cursor: pointer;padding: 0 10px;background:#f01414;" tb-name="announcement">X</span>	
				<h4><span>'.$a['posted_date'].',</span> '.$a['a_title'].'</span></h4>
				<p>'.$make_short.'</p>
			</div>';

		}
		 echo '<ul class="pagination">';
           foreach ($links as $link) {
				echo "<li>". $link."</li>";
          	} 
          echo '</ul>';
	}else{
		echo 'empty !';
	}
	?>
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

 
  