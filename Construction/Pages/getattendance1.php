<?php
	if(isset($_POST["btnsubmit"]))
	{
		include "z_db.php";

		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];

		$query = "select * from `employee` ";
		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["eid"];
			if(isset($_POST[$mno]))
			{
				$query1 = "INSERT INTO  `attandance`(`member_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','Present')";
			}
			else
			{
				$query1 = "INSERT INTO  `attandance`(`member_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','Absent')";
			}
			mysqli_query($con,$query1)or die("insert error".$mno);
			print "<script>";
			print "alert('Attendance Submitted....');";
			print "self.location='getattendance.php';";
			print "</script>";
		}




	}
	else
	{
		header("Location:index.php");
	}
?>

<?php include "footer.php"; ?>
