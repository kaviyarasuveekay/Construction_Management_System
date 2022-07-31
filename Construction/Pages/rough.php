<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Supplier</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/manage_supplier.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body>



    <!-- including side navigations -->
    <?php include("sections/side.html"); ?>
<style type="text/css">
<!--
.style1 {
  font-family: "Courier New", Courier, monospace;
  font-size: 60px;
  color: #FFFFFF;
  font-style: italic;
}
.style2 {
  font-size: 24px;
  color: #0000FF;
}
.style6 {font-size: 16px}
-->
</style>
<table width="800" border="1" align="center">
      
      <tr>
        <td bgcolor="#999966"><div align="center">
                  
                </div>       </td>
      </tr>
      <tr>
        <td><div align="center">
        <form action="" method="post">
          <table width="606" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
            <tr><td colspan="3" align="center"><h3>Search Enrolment No Wise Records Here</h3></td></tr>
            <tr>
              <td width="308" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Enter the enrolment no</span></strong></div></td>
              <td width="144" bgcolor="#9999CC"><span class="style6">
                <input type="text" name="eno" />
              </span></td>
              <td width="130" bgcolor="#9999CC"><input type="submit" value="View Information" name="btnsubmit"/></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    <?php
    if(isset($_POST["btnsubmit"]))
    {
      include "z_db.php";
      extract($_POST);
      $query = "select * from `member` where enrolment_no = ".$eno." limit 1";

      $result = mysqli_query($con,$query)or die("select error error");
      while($rec = mysqli_fetch_array($result))
      {
        echo '<tr><td colspan="2"><table width="400" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
        <tr>
          <td width="160" bgcolor="#9999CC"><span class="style2">Enrolment No</span></td>
          <td width="160" bgcolor="#9999CC"><span class="style2">Name</span></td>';
          $query1 = "select * from `attandance` where `member_id` = ".$rec["member_id"]." order by date";
          $result1 = mysqli_query($con,$query1)or die("select error error");
          while($rec1 = mysqli_fetch_array($result1))
          {
              echo '<td bgcolor="#9999CC" class=style2>'.$rec1["date"].'</td>';
          }
        echo '</tr>
        <tr>
          <td width="222"><span class="style6">'.$rec["enrolment_no"].'</span></td>
          <td width="222"><span class="style6">'.$rec["name"].'</span></td>';
          $query1 = "select *from `attandance` where `member_id` = ".$rec["member_id"]." order by date";
          $result1 = mysqli_query($con,$query1)or die("select error error");
          while($rec1 = mysqli_fetch_array($result1))
          {
              echo '<td>';
            if($rec1["attendance"]==0)
              echo "Absent";
            else
              echo "Present";
            echo '</td>';
          }

        echo '
        </tr>

        </table></td></tr>';
      }
    }
    else
    {



      include "z_db.php";
      extract($_POST);
      $query = "select * from `member` ";

      $result = mysqli_query($con,$query)or die("select error error");
      while($rec = mysqli_fetch_array($result))
      {
        echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
        <tr>
          <td width="160" bgcolor="#9999CC"><span class="style2">Enrolment No</span></td>
          <td width="160" bgcolor="#9999CC"><span class="style2">Name</span></td>';
          $query1 = "select * from `attandance` where `member_id` = ".$rec["member_id"]." order by date";
          $result1 = mysqli_query($con,$query1)or die("select error error");
          while($rec1 = mysqli_fetch_array($result1))
          {
              echo '<td bgcolor="#9999CC" class=style2>'.$rec1["date"].'</td>';
          }
        echo '</tr>
        <tr>
          <td width="222"><span class="style6">'.$rec["enrolment_no"].'</span></td>
          <td width="222"><span class="style6">'.$rec["name"].'</span></td>';
          $query1 = "select *from `attandance` where `member_id` = ".$rec["member_id"]." order by date";
          $result1 = mysqli_query($con,$query1)or die("select error error");
          while($rec1 = mysqli_fetch_array($result1))
          {
              echo '<td>';
            if($rec1["attendance"]==0)
              echo "Absent";
            else
              echo "Present";
            echo '</td>';
          }

        echo '
        </tr>

        </table></td></tr>';
      }
    }
    ?>
  </table>
    <div class="container-fluid">
      <div class="container">

        <!-- header section -->
        <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #7CFC00;">
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search :&emsp;</label>
            <input type="text" class="form-control" name="eno" />
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #7CFC00;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
                    <th style="width: 5%;">SL</th>
            				<th style="width: 10%;">Enrollment Number</th>
            				<th style="width: 20%;">Name</th>
                    <th style="width: 15%;">Email</th>
                    <th style="width: 15%;">Contact Number</th>
                    <th style="width: 20%;">Address</th>
                    <th style="width: 15%;">Action</th>
            			</tr>
                  <?php
$connect=mysqli_connect("localhost","root","","online_attendance") or die("Connection failed");
$query="SELECT * from member";
$res=mysqli_query($connect,$query);
$seq_no = 0;
while($row=mysqli_fetch_array($res))
{
  $seq_no++;
 ?>
              <tr>
    <td><?php echo $seq_no; ?></td>
    
  </tr>
  <?php
}
?>
            		</thead>
                <tbody id="suppliers_div">
                  
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #7CFC00;"><br>
      </div>
    </div>
  </body>
</html>
