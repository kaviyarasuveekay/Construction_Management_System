<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Workers Attendance</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
      input.larger{
        width:30px;
        height:30px;
      }
    </style>
    
  </head>
  
<body>
  <?php include("sections/top1.html"); ?>
<?php include("sections/side.html"); ?>
<br>

<div style="float: right">
<table width="1120" border="1" align="center">
      <h4>Workers Attendance</h4>
      <hr style="border-top: 2px solid #7CFC00;"><br>
      
      <tr>
        <td ><div align="center">
                  
                </div>       </td>
      </tr>
      <tr>
        <td>
        <form action="getattendance1.php" method="post">
          <table class="table table-bordered table-striped table-hover" id="emp" width="1060" border="2" style="font-size:20px;margin-top:50px">
            
            <tr >

              <td ><strong><span >SL</span></strong></td>
              <td ><strong><span >Employee ID</span></strong></td>
              <td ><strong><span >Name</span></strong></td>
              <td ><strong><span >Date</span></strong></td>
              <td ><strong><span >Status</span></strong></td>
            </tr>
            <?php
        include "z_db.php";
        extract($_POST);
        $query = "select * from `employee` inner join attandance on employee.eid=attandance.member_id";
        $s = 0;
        $result = mysqli_query($con,$query)or die("select error");
        while($rec = mysqli_fetch_array($result))
        {
          $s = $s + 1;
          echo ' <tr>
                <td >'.$rec["att_id"].'</td>
                <td >'.$rec["ecode"].'</td>
                <td >'.$rec["lastname"].'</td>
                <td >'.$rec["date"].'</td>
                <td >'.$rec["attendance"].'</td>
              </tr>';
        }
      ?>
            
          </table>
          </form>

          

         </td>
      </tr>
    </table>
    <hr style="border-top: 2px solid #7CFC00;"><br>
</div>
</body>

        <div class="row">

            </div>
          </div>

        </div>

      </div>
    </div>
  </body>
  <script type="text/javascript">
  function getatt(value)
  {
    if(value == true)
    {
      document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
      document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
    }
    else
    {
      document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
      document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
    }
  }
</script>
</html>
