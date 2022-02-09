<?php
	$dbHost = '143.244.179.65:3306';
	$dbName = 'contacts_db';
	$dbUser = 'root';
	$dbPassw = 'Pass.123@5-.5';
	$mysqli = new mysqli($dbHost, $dbUser, $dbPassw, $dbName); 
	if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	}
?>
