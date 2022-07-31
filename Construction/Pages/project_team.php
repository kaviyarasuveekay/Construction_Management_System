<!DOCTYPE html>
<html>
<head>
  <title>Employees</title>
</head>
<body>
	<?php include("sections/top1.html"); ?>
<div class="col-md-14">
	<h4>Team Members</h4>

<hr style="border-bottom:1px solid black"></hr>
</div>
<div class="col-md-2">
  
  <a type="button" class="btn btn sm- btn-danger"  onclick="add_team()">New Team <i class="fa fa-plus"></i></a>
</div>
<br>
<br>
<div class="col-lg-10" style="width: 100%">
</style>
<?php
include '../includes/db.php';
?>
</div>
<div class="col-lg-12">
	<div class="panel panel-default">
<div id="team">
	<?php include 'team.php'; ?>
</div>
</div>
</div>



<?php include '../includes/update_modals.php' ?>
 <div id="retCode1"></div>
 <script>
	jQuery(document).ready(function(){
						jQuery("#proj_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								
								$.ajax({
									type: "POST",
									url: "../forms/update_forms.php?action=project",
									data: formData,
									success: function(html){
										$('#retCode1').html(html);
									 
									}
								});
									return false;
						});
						});
	function add_team(){
		
		$.ajax({
			url:"add_team.php",
			success:function (html){
				$('#team').html(html);

			}
		});
	}
</script>