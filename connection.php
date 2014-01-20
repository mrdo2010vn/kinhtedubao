<?php 
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'kinhtedubao');
	
	// Connect to database
	$conn = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die('Could not connect to database: ').mysql_error();
	mysql_select_db(DB_NAME) or die('Could not selected database name: ').mysql_error();
?>