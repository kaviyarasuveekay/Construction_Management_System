<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Workers Sallary</title>
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
      <h4>Workers Sallary</h4>
      <hr style="border-top: 2px solid #7CFC00;"><br>
      
      <tr>
        <td ><div align="center">
                  
                </div>       </td>
      </tr>
      <tr>
        <td>
        <form action="getsallary.php" method="post">
        
             <tr>
                  <td><strong> Select Sallary Month : </strong><br />
                   <?php
                $dt = getdate();
              $day = $dt["mday"];
              $month = date("m");
              $year = $dt["year"];

              echo "<select name='cdate'>";
              for($a=1;$a<=31;$a++)
              {
                if($day == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select><select name='cmonth'>";
              for($a=1;$a<=12;$a++)
              {
                if($month == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select><select name='cyear'>";
              for($a=2022;$a<=$year;$a++)
              {
                if($year == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select>";
            ?>
                    </td>
                </tr>


          
          <table class="table table-bordered table-striped table-hover" id="emp" width="1060" border="2" style="font-size:20px;margin-top:50px">
            
            <tr >

              <td ><strong><span >SL</span></strong></td>
              <td ><strong><span >Employee ID</span></strong></td>
              <td ><strong><span >Name</span></strong></td>
              <td ><strong><span >Role</span></strong></td>
              <td ><strong><span >Sallary</span></strong></td>
              <td ><strong><span >Status</span></strong></td>
            </tr>
            <?php
        include "z_db.php";
        extract($_POST);
        $query ="select * from `employee` inner join position on employee.pid=position.pid";
        $s = 0;
        $result = mysqli_query($con,$query)or die("select error");
        while($rec = mysqli_fetch_array($result))
        {
          $s = $s + 1;
          echo ' <tr>
                <td >'.$rec["eid"].'</td>
                <td >'.$rec["ecode"].'</td>
                <td >'.$rec["lastname"].'</td>
                <td >'.$rec["position"].'</td>
                <td >'.$rec["daily_rate"].'</td>
                <td ><input type=checkbox class="larger" name='.$rec["eid"].' onclick="getatt(this.checked);"/></td>
                
              </tr>';
        }
      ?>
            <tr>
              <td colspan="4"><div align="center">
                <input class="btn btn-danger" type="submit" value="Submit" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
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
  
</html>
