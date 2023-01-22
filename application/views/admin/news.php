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
			<a class="btn-new" href="<?php echo base_url();?>index.php/Admin/createnews"><i class="fa fa-plus"></i>
Add news</a>
		</div>
	<div class="graphs loading">
		<h3>Publish Latest News</h3>
		
		<?php 

		if(!empty($news)){
			foreach ($news as $key => $a) {
			$make_short = $a['description'];
			if(!empty($a['cover_photo'])){
				$banner = base_url().'uploads/news/'.$a['cover_photo'];
			}else{
				$banner = base_url().'uploads/initial-images/college.jpg';
			}
			echo '<div class="col_3 single-box" id="r-'.$a['a_id'].'">
					<span class="remove" style="float: right;color: #fff;cursor: pointer;position: absolute;padding: 0 10px;background:#f01414;" tb-name="news">X</span>

					<img src="'.$banner.'" class="img-responsive" style="width:100%;height:400px;padding-bottom:10px;"/>	
				<h4><span>'.$a['posted_date'].',</span> '.$a['news_title'].'</span></h4>
				<div class="truncate">
				<p>'.$make_short.'</p></div>
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

 
