<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">
		<div class="col-md-offset-3 col-md-6 well">	
	<?php if(isset($_SESSION['flash'])){
    	echo '<span><strong style="color:#29a829;">'.$_SESSION['flash'].'</strong></span>';
   			 unset($_SESSION['flash']);
		}
		else{
    		echo '';
		}?>	
		<?php echo form_open_multipart('Admin/upload_gallery');?>		
		<div class="panel-body">
			<div class="col-md-12">
				<div class="form-group">
					<input type="text" name="gallery" placeholder="Gallery name.." class="form-control"/>
			</div>
		</div>
		<div class="col-md-12">
		<input type="file" name="upload_doc[]"  multiple="multiple" style="margin-bottom: 10px;height: 38px;"/>
		<button class="btn btn-primary">Upload</button>
		</div>
		</div>
		<?php echo form_close();?>

		</div>
		<div class="clearfix"> </div>
		<div class="col-md-12">
			
				<?php 
			foreach ($gal as $key => $gallery) {
	$gallery_name = $gallery['gallery_title'];
			$g = $gallery['image'];
      		$j  = json_decode($g, true);

     echo '<div class="col-md-12 well single-box" id="r-'.$gallery['a_id'].'">';	

      	echo '<p><span>'.$gallery_name.'</span><span style="float: right;color: #d50000;font-weight: bold;cursor: pointer;background: #cdcdcd;padding: 2px;" class="remove" tb-name="gallery">X</span></p>';
      		foreach($j as $key=> $item){	
      			$image = base_url().'uploads/gallery/'.$item['upload_file'];
      			
      			echo '<div class="col-md-4" style="padding: 0px;margin-top:25px;"><img src="'.$image.'" class="img-responsive" style="height: 150px;width: 300px;border-radius: 4px;border: 2px solid #cdcdcd;"/></div>';
			}
			echo '</div>';
}
			?>
			<div style="padding-bottom:50px;height: 50px;"></div>
			</div>
		</div>
	</div>
</div></div>
<!--body wrapper start-->
</div>
	<!--body wrapper end-->
</div>
    <!--footer section start-->
	<!--footer section end-->
	<!-- main content end-->
</section>			

