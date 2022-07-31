<?php
	
	session_start();
	
	
	if(!isset($_SESSION['ID']) || (trim($_SESSION['ID']) == '')) {
		header("location: ../");
		exit();
	}
?>