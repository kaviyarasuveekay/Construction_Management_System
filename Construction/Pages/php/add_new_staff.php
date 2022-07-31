<?php
  require "db_connection.php";
  if($con) {
    $name = ucwords($_GET["id"]);
    $contact_number = $_GET["name"];
    $address = ucwords($_GET["contact_number"]);
    $doctor_name = ucwords($_GET["email"]);
    $doctor_address = ucwords($_GET["address"]);

    $query = "SELECT * FROM staff WHERE CONTACT_NUMBER = '$address'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row)
      echo "staff ".$row['NAME']." with contact number $contact_number already exists!";
    else {
      $query = "INSERT INTO staff (ID, NAME, CONTACT_NUMBER, EMAIL, ADDRESS) VALUES('$name', '$contact_number', '$address', '$doctor_name', '$doctor_address')";
      $result = mysqli_query($con, $query);
      if(!empty($result))
  			echo "$name added...";
  		else
  			echo "Failed to add $name!";
    }
  }
?>
