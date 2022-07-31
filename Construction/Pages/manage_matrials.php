<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Materials</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rough1.css">
    <script src="js/manage_medicine.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body>
     <?php include("sections/top1.html"); ?>
    <?php include("sections/side.html"); ?>

    <div class="container-fluid">
      <div class="container">

      
        <hr style="border-top: 2px solid #7CFC00;"><br>
        
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search :&emsp;</label>
            <input type="text" class="form-control" id="by_name" placeholder="By Material Name" onkeyup="searchMedicine(this.value, 'name');">
            &emsp;<input type="text" class="form-control" id="by_generic_name" placeholder="By Remarks" onkeyup="searchMedicine(this.value, 'generic_name');">
            &emsp;<input type="text" class="form-control" id="by_suppliers_name" placeholder="By Supplier Name" onkeyup="searchMedicine(this.value, 'suppliers_name');">
            &emsp;<button class="btn btn-success font-weight-bold" onclick="cancel();"><i class="fa fa-refresh"></i></button>
          </div>

          <div class="col col-md-12">
            <hr style="border-top: 2px solid #7CFC00;"><br>
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
            				<th style="width: 5%;">SL.</th>
            				<th style="width: 20%;">Material Name</th>
                    <th style="width: 10%;">Packing</th>
                    <th style="width: 30%;">Remarks</th>
            				<th style="width: 20%;">Supplier</th>
                    <th style="width: 15%;">Action</th>
            			</tr>
            		</thead>
            		<tbody id="medicines_div">
                  <?php
                    require 'php/manage_medicine.php';
                    showMedicines(0);
                  ?>
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        
        <hr style="border-top: 2px solid #7CFC00;"><br>
      </div>
    </div>
  </body>
</html>
