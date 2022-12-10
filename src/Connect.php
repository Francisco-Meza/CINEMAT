<?php
	$servername = "189.182.55.213";
	$database = "cinemat";
	$username = "equipo";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password, $database)
	 or die("Connection failed: " . mysqli_connect_error());
	echo "Connected successfully";
?>