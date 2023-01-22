
<style>
      .program-form-controlor{
      	margin-bottom: 100px !important;
      	background-color: rgb(255, 255, 255);
		box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
		border-radius: 3px;
		margin-bottom: 50px;
		padding: 25px;
		box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  		transition: box-shadow 0.3s ease-in-out;
      }
      .program-form-controlor:hover{
      	box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      }
      .program-form-controlor h3{
		padding-top: 20px;
		font-family: open sans;
		color: #fb4224;
      	}
		.panel-body{
			padding:0px !important;
		}
		.program-form-controlor .label{
			font-size: 1em;
			text-align: left;
			color: #f44336;
			display: inherit;
			margin-bottom: 15px !important;
			padding: 0px;
			margin-top: 35px !important;
			text-transform: uppercase
		}
		textarea{
			width: 100%;
			min-height: 200px;
		}
      .success{
		background: #f6f6f6;
		box-shadow: 0 1px 2px rgba(0,0,0,0.15);
		margin-bottom: 5px;
		border-radius: 4px;
      }
      .input-group{
      	margin:0px !important;
      }
  </style>
<?php 

if(!empty($undrgdr_pro)){
$full_program_name = $undrgdr_pro['0']['full_program_name'];
$id = $undrgdr_pro['0']['id'];
$program = $undrgdr_pro['0']['program'];
$level = $undrgdr_pro['0']['level'];
$overview = $undrgdr_pro['0']['overview'];
$program_at_KU = $undrgdr_pro['0']['program_at_KU'];
$program_goals = $undrgdr_pro['0']['program_goals'];
$fees_and_funding = $undrgdr_pro['0']['fees_and_funding'];
$how_to_apply= $undrgdr_pro['0']['how_to_apply'];
$course_brochure = $undrgdr_pro['0']['course_brochure'];

$duration = $undrgdr_pro['0']['program_duration'];
$cost = $undrgdr_pro['0']['program_total_cost'];
$language = $undrgdr_pro['0']['teaching_language'];
//$banner = $undrgdr_pro['0']['program_banner'];

	   	
}
else{
$full_program_name ='';
$program ='';
$level = '';
$overview='';
$program_at_KU='';
$program_goals = '';
$fees_and_funding ='';
$how_to_apply='';
$course_brochure = '';
$duration ='';
$cost = '';
$language = '';
//$banner ='';
}?>
<div id="page-wrapper">
<div class="graphs">
	<div class="col_3">
 <?php if(isset($_SESSION['flash'])){
    echo '<div class="col-md-offset-4 col-md-4 success"><strong style="color:#29a829;">'.$_SESSION['flash'].'</strong></div>';
    unset($_SESSION['flash']);

}
else{
    echo '';
}?>
		<div class="col-md-offset-1 col-md-10">
		<?php echo form_open_multipart('Admin/UpdatePrograms');?>
		<div class="well program-form-controlor">
			<div class="panel-header header-text text-center">
				<h3><?php echo $full_program_name;?></h3>
				<hr>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4 ">
					<input type="hidden" class="form-control" name="pro_id" value="<?php echo $id;?>">
						<label class="label">Program Name:</label>
						<input type="text" class="form-control" name="proName" value="<?php echo $program;?>">
					</div>
					<div class="form-group col-md-4 ">
						<label class="label">Full Program Name:</label>
						<input type="text" class="form-control" name="fullproName" value="<?php echo $full_program_name;?>"/>
					</div>
					<div class="form-group col-md-4 ">
						<label class="label">Duration:</label>
						<input type="text" class="form-control" name="duration" value="<?php echo $duration;?>"/>
					</div>
					<div class="form-group col-md-4 ">
						<label class="label">Level:</label>
						<select type="text" class="form-control" name="level">
			<option value="<?php echo $level;?>"><?php echo $level;?></option>
							<option value="Bachelor">Bachelor</option>
							<option value="Master">Master</option>
						</select>
					</div>
					<div class="form-group col-md-4 ">
						<label class="label">Total Cost (Rs.):</label>
						<input type="text" class="form-control" name="tcost" value="<?php echo $cost;?>"/>
					</div>
					<div class="form-group col-md-4 ">
						<label class="label">Teaching Language:</label>
						<input type="text" class="form-control" name="language" value="<?php echo $language;?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="label">Overview</label>
					<div id="form-controlor">	
   					 <textarea name="overview" class='form-control edit' ><?php echo $overview;?></textarea>
  					</div>
				</div>
				<div class="form-group">
					<label class="label"><?php echo $program;?> at Kathmandu University</label>
   					 <textarea name="ProgramAtKU" class='form-control' id="editor"><?php echo $program_at_KU;?></textarea >
				</div>
				<div class="form-group">
					<label class="label">The Goals</label>
   					 <textarea name="ProgramGoals" class='form-control' id="editor"><?php echo $program_goals;?></textarea >
				</div>
				<div class="form-group">
					<label class="label">Fees and Funding</label>
   					 <textarea name="feesAndFunding" class='form-control' id="editor"><?php echo $fees_and_funding;?></textarea>
				</div>
				<div class="form-group">
					<label class="label">How to apply</label>
   					 <textarea name="applyForBach" class='form-control'><?php echo $how_to_apply;?></textarea>
				</div>
	  <div class="form-group">
	  	<label class="label">Brochure:</label>
           	<div class="fileinput fileinput-new input-group" data-provides="fileinput">
  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"><?php echo $course_brochure;?></span></div>
  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
        </div>

				<div class="form-group">
					<button class="btn btn-success pull-right">UPDATE</button>
				</div>
			</div>
		</div>
		<?php echo form_close();?>
		</div>
	</div>
</div>
</div>
