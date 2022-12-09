<?php
	$servername = "localhost";
	$database = "cinemat";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password, $database)
	 or die("Connection failed: " . mysqli_connect_error());
	echo "Connected successfully";
?>