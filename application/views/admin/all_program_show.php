<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">	
		<?php 
			if(!empty($programs)){
				foreach ($programs as $key => $pro) {

					if($pro['level']==='Bachelor'){
						$level = 'Undergraduate';
						}else{
						$level = 'Graduate';
					}
					echo '<a href="'.base_url().'index.php/Admin/SelectedProgram?pid='.$pro['id'].'"><div class="col-md-3 widget widget1"><div class="r3_counter_box"><i class="fa fa-graduation-cap"></i><div class="stats"><h5>'.$pro['full_program_name'].'</h5><div class="grow"><p>'.$level.'</p></div></div></div></div></a>';
				}

			}else{
				echo "No programs !!";
			}
			?>
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
