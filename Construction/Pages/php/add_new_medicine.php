<?php
  require "db_connection.php";
  if($con) {
    $name = ucwords($_GET["name"]);
    $packing = strtoupper($_GET["packing"]);
    $generic_name = ucwords($_GET["generic_name"]);
    $suppliers_name = $_GET["suppliers_name"];

    $query = "SELECT * FROM materials WHERE UPPER(NAME) = '".strtoupper($name)."' AND UPPER(PACKING) = '".strtoupper($packing)."' AND UPPER(SUPPLIER_NAME) = '".strtoupper($suppliers_name)."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row)
      echo "Material $name with $packing already exists by supplier $suppliers_name!";
    else {
      $query = "INSERT INTO materials (NAME, PACKING, REMARKS, SUPPLIER_NAME) VALUES('$name', '$packing', '$generic_name', '$suppliers_name')";
      $result = mysqli_query($con, $query);
      if(!empty($result))
  			echo "$name added...";
  		else
  			echo "Failed to add $name!";
    }
  }
?>
