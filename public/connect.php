<?php
	$servername='localhost';
	$username='root';
	$password='';
	$db='project';

	$conn= mysqli_connect($servername, $username, $password, $db);
	if ($conn) {
		//echo "Database connected";
	}
	else{
		echo "Database not connected";
	}
?>
