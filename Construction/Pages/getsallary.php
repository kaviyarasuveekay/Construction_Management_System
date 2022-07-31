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
			$ln=$rec["lastname"];
			if(isset($_POST[$mno]))
			{
				$query1 = "INSERT INTO  `sallary`(`member_id` , `name` ,  `date` ,  `status`) VALUES('$mno','$ln','$date','Paid')";
			}
			else
			{
				$query1 = "INSERT INTO  `sallary`(`member_id` , `name` ,  `date` ,  `status`) VALUES('$mno','$ln','$date','Not Paid')";
			}
			mysqli_query($con,$query1)or die("insert error".$mno);
			print "<script>";
			print "alert('Sallary Added....');";
			print "self.location='sallary.php';";
			print "</script>";
		}




	}
	else
	{
		header("Location:sallary.php");
	}
?> 
