<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Supplier</title>
    <link rel="stylesheet" href="css/main.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
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
          <div class="row col col-md-6">
            <?php
             
              require "sections/add_new_supplier.html";
            ?>
          </div>
        </div>
        <hr style="border-top: 2px solid #7CFC00;"><br>

      </div>
    </div>
  </body>
</html>
