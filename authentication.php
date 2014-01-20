<?php 
	// check authentication
	session_start();
	if (!isset($_SESSION['userid'])){
		header('LOCATION: login.php');
		exit();
	}
?>