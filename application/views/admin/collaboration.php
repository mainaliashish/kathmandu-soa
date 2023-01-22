<?php 
if(!empty($col)){
		$id = $col['0']['id'];
		$des = $col['0']['description'];
		$coll= $col['0']['collaboration'];
}else{
	$id ='';
	$coll ='';
	$des = '';
}

?>


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
	.text{
	    width:100%;
	    height:400px !important;
	}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">	
					<div class="well">
						<?php echo form_open_multipart('Admin/updatecoll');?>
						<?php if(isset($_SESSION['flash'])){
    echo '<span"><strong style="color:#29a829;margin-right: 100px;">'.$_SESSION['flash'].'</strong></span>';
    unset($_SESSION['flash']);

}

else{
    echo '';
}?>
		
						<div class="panel-header">
							<h3>KUSOA COLLABORATION</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
<input type="hidden" value="<?php echo $id;?>" name="cid">
								<label for="title">Desctiption:</label>
								<textarea name="coll" class="form-control"><?php echo $des;?></textarea>
							</div>
							<div class="form-group">

								<label for="title">Collaborations list:</label>
								<textarea name="description" class="form-control text"><?php echo $coll;?></textarea>
							</div>
							<div class="row col-md-12 text-right">
								<div class="form-group">
							<button class="btn btn-success pull-right" style="margin-top:15px;">UPDATE</button>
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


