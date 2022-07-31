<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/home.css">
    <script src="js/restrict.js"></script>
  </head>
  <body>
    <?php include("sections/top1.html"); ?>
   <div class="col-md-12">
  <h4>Home Page</h4> 
<hr style="border-bottom:1px solid black"></hr>
</div><div class="col-lg-12" >
  <div class="panel panel-default" >
        <div class="panel-heading" >

            
          
         
          <?php
            function createSection2($icon, $location, $title) {
              echo '
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
                  <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href=\''.$location.'\'">
                    <div class="text-center">
                      <span class="h1"><i class="fa fa-'.$icon.' p-2"></i></span>
                      <div class="h5">'.$title.'</div>
                    </div>
                  </div>
                </div>
              ';
            }
            createSection2('address-card', 'getattendance.php', 'Attendance');
            createSection2('address-card', 'manage_supplier.php', 'Manage Supplier');
            createSection2('handshake', 'view_attendance.php', 'View Attendance');
            createSection2('bar-chart', 'add_purchase.php', 'Add New Purchase');
            createSection2('shopping-bag', 'manage_materials_stock.php', 'Manage Materials Stock');
            createSection2('shopping-bag', 'manage_matrials.php', 'Manage Materials');
            createSection2('bar-chart', 'manage_purchase.php', 'Manage Purchases');
            createSection2('book', 'purchase_report.php', 'Purchase Report');  
            createSection2('bar-chart', 'sallary.php', 'Worker sallary');  
            createSection2('bar-chart', 'viewsallary.php', 'View sallary');  
          ?>
<hr style="border-top: 2px solid #7FFF00;"><br>
    <div class="container-fluid">
      <div class="container">
        
        <div class="row">
          <div class="row col col-xs-10 col-sm-10 col-md-10 col-lg-10">

            

          </div>
          <div>
          </div>

          

        </div>

        

        <div class="row">

          

        </div>
       
        
      <div>
    </div>

      </div>
    </div><hr style="border-top: 2px solid #7FFF00;"><br>
  </body>
</html>
