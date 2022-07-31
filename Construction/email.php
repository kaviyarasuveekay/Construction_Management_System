 <link rel="stylesheet" href="styles.css">
<?php 
  $db = mysqli_connect('localhost', 'root', '', 'building');
  $email = "";
  if (isset($_POST['register'])) {
  	$email = $_POST['email'];
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_e = mysqli_query($db, $sql_e);

  	if(mysqli_num_rows($res_e) > 0){
  	  echo 'Check mail to reset your password';
  	}else{
           echo 'Please enter valid email id!';
           exit();
  	}
  }
?>