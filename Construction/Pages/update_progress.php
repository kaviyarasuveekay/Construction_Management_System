<div class="col-md-12"><br>
<hr style="border-bottom:1px solid grey"></hr>
</div>
<div class="col-md-2">
<style>
	.control-label {
		text-transform:capitalize;
	}


</style>
<?php
include '../includes/db.php';
$id = $_GET['id'];

$emp_query = mysqli_query($conn,"SELECT *,CONCAT(lastname,', ',firstname, ' ',midname) as name, projects.io as stats from projects left join project_team on projects.tid = project_team.tid left join employee on project_team.eid = employee.eid  where project_id= '$id'");
$row= mysqli_fetch_assoc($emp_query);
 ?>
</div>

<div class="col-md-12">
	<div class="col-lg-10">
<div class="panel panel-default">
<div class="panel-body">
	<div class="col-md-4">
	<center><img src="../images/<?php echo $row['site_pic'] ?>" width="200px" height="230px"></center>
	<br>
	<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label" style="font-size:15px !important">Project Name:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label" style="font-size:18px !important"><?php echo $row['project'] ?></label></div>
	</div>
	<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label">Start Date:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label"><?php echo date("F d, Y",strtotime($row['start_date'])) ?></label></div>
	</div>
	<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label">Deadline:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label"><?php echo date("F d, Y",strtotime($row['deadline'])) ?></label></div>
	</div>
	<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label">Location:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label"><?php echo $row['location'] ?></label></div>
	</div>

	<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label">Project Cost:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label"><?php echo  $row['overall_cost'] . ' Php.' ?></label></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label">Foreman:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label"><?php echo $row['name'] ?></label></div>
	</div>
	<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label">Project type:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label">
		<?php 
		if($row['proposed_project'] == '1'){
			echo 'Building';
		}if($row['proposed_project'] == '2'){
			echo 'House';
		}elseif($row['proposed_project'] == '3'){
			echo 'Highways';
		}
		elseif($row['proposed_project'] == '4'){
			echo 'Grandstand';
		}elseif($row['proposed_project'] == '5'){
			echo 'Covered Court';
		}	
		 ?></label></div>
		
	</div>
	
		<div class="row">
		<div class="col-sm-4 text-right"><label class="control-label">Project Status:</label></div>
		<div class="col-sm-8 text-left"><label class="control-label"><?php  if($row['stats'] == '1'){ echo 'On going';}elseif($row['stats'] == '2'){ echo 'Finished'; }elseif($row['stats'] == '3'){ echo 'Canceled'; } ?></label></div>
	</div>
	
<br>
<br>
<br>

	

<script>
 jQuery(document).ready(function(){
chart.exportConfig = {
    menuItems: [{
        icon: '../am_chart/images/export.png',
        format: 'png',
        onclick: function(a) {
            var output = a.output({
                format: 'png',
                output: 'datastring'
            }, function(data) {
                console.log(data)
            });
        }
    }]
}
}); 

var chart = AmCharts.makeChart("chartdiv<?php echo $id ?>", {
    "type": "serial",
    "theme": "none",
    "pathToImages":"http://localhost/new_admin/am_chart/images/export.png",
    "dataProvider": [<?php echo $data.$data2 ?>],
    "title":"Project Progress",
    "valueAxes": [{
        "axisAlpha": 0,
        "position": "left",
        "title": "Progress (%)",
    
    }],

    "startDuration": 1,
    "graphs": [{
        "balloonText": "<b style='text-transform:capitalize'>[[name]]: [[value]]%</b>",
        "colorField": "color",
        "fillAlphas": 0.9,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "progress",
        "labelText":"[[progress]]%",
        "labelPosition":"inside",
    }],
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "name",
    "categoryAxis": {
    "text-transform":"capitalize",
        "gridPosition": "start",
        "labelRotation": 50,
        "title":"Divisions"
    },

});


</script>

		</div>
		
		
	</div>
	

<br>


	
</div>
</div>
</div>
</div>


 <script>
	
	
		function validate_prog(){
			var id = $('#div').val();
			var prog = $('#prog').val();

			$.ajax({
				url: "validate_progress.php?id="+id+"&prog="+prog,
				success:function(html){
					$('#validation').html(html);
				}
			});

		}
</script>
