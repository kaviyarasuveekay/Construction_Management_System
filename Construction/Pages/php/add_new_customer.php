<?php
  require "db_connection.php";
  if($con) {
    $name = ucwords($_GET["name"]);
    $gender = ucwords($_GET["gender"]);
    $email = $_GET["email"];
    $contact_number = $_GET["contact_number"];
    $address = ucwords($_GET["address"]);

    $query = "SELECT * FROM workers WHERE UPPER(NAME) = '".strtoupper($name)."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row)
      echo "Worker with name $name already exists!";
    else {
      $query = "INSERT INTO workers (NAME, GENDER, EMAIL, CONTACT_NUMBER, ADDRESS) VALUES('$name', '$gender', '$email', '$contact_number', '$address')";
      $result = mysqli_query($con, $query);
      if(!empty($result))
        echo "$name added...";
      else
        echo "Failed to add $name!";
    }
  }
?>
