<style>
      .update-logo{
      	float: right !important;
		font-size: 30px;
		margin-top: -10px;
      }
      .update-logo a{
		color:#ABABAB;
      }
      .update-logo a:hover{
		color:green;
      }
      .program-editor{
      	margin-bottom: 100px !important;
      	background-color: rgb(255, 255, 255);
		box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
		border-radius: 3px;
		margin-bottom: 50px;
		padding: 25px;
		box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  		transition: box-shadow 0.3s ease-in-out;
      }
      .program-editor:hover{
      	box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      }
      .program-editor h3{
      	text-align: center;
		padding-top: 20px;
		font-family: open sans;
		color: #fb4224;
      	}
		.panel-body{
			padding:0px !important;
		}
		.program-editor .label{
			font-size: 1.5em;
			text-align: left;
			color: #f44336;
			display: inherit;
			margin-bottom: 15px !important;
			padding: 0px;
			margin-top: 35px !important;
			text-transform: uppercase
		}
  </style>
<?php 

if(!empty($gdr_pro)){
$proId = $gdr_pro['0']['id'];
$program = $gdr_pro['0']['program'];
$level = $gdr_pro['0']['level'];
$overview = $gdr_pro['0']['overview'];
$bachelor_program_at_KU = $gdr_pro['0']['bachelor_program_at_KU'];
$bachelor_program_goals = $gdr_pro['0']['bachelor_program_goals']
$bachelor_fees_and_funding = $gdr_pro['0']['bachelor_fees_and_funding'];
$how_to_apply_for_bachelor= $gdr_pro['0']['how_to_apply_for_bachelor'];
$under_gdr = $level.' in '.$program;
if(!empty($gdr_pro['0']['course_brochure'])){
$download_brochure = '<i class="fa fa-file-text fa-3x" aria-hidden="true" title="Available"></i>';
}else{
$download_brochure ='<label>No Brochure !!</label>';
}
}else{
$program ='';
$level = '';
$overview='';
$bachelor_program_at_KU='';
$bachelor_program_goals='';
$bachelor_fees_and_funding ='';
$how_to_apply_for_bachelor='';
$course_brochure = '';
}


?>
<div id="page-wrapper">
<div class="graphs">
	<div class="col_3">
		<div class="col-md-offset-1 col-md-10">
		<div class="well program-editor">
			<div class="panel-header header-text">
				<span class="update-logo"><a href="<?php echo base_url();?>index.php/Admin/SelectedProgram?Program=<?php echo $proId;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				</span>
				<h3><?php echo $under_gdr;?></h3>
				<hr>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="label">Overview</label>
					
    					<div class='text-left'>
      						<?php echo $overview;?>
  					</div>
				</div>
				<div class="form-group">
					<label class="label"><?php echo $program;?> at Kathmandu University</label>
					
    					<div class='text-left'>
      					<?php echo $bachelor_program_at_KU;?>
   				
  					</div>
				</div>
				<div class="form-group">
					<label class="label">The Goals</label>
					
    					<div class='text-left'>
      					<?php echo $bachelor_program_goals;?>
   			
  					</div>
				</div>
				<div class="form-group">
					<label class="label">Fees and Funding</label>
					
    					<div class='text-left'>
      					<?php echo $bachelor_fees_and_funding;?>
   			
  					</div>
				</div>
				<div class="form-group">
					<label class="label">How to apply</label>
					
    					<div class='text-left'>
      					<?php echo $how_to_apply_for_bachelor;?>
   					 </div>
  					
				</div>
	  <div class="form-group">
	  		<label class="label">Brochure Status:</label>
          		 <?php echo $download_brochure;?>
            </div>
			</div>
		</div>
		</div>
	</div>
</div>
</div>
