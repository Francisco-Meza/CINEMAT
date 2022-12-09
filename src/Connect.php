<?php
<<<<<<< HEAD

function conn(){

	$hostname ="localhost";
	$usuario = "root";
	$passworddb = "";
	$dbname ="cinemat";
	
	$conectar = mysqli_connect($hostname,$usuario,$passworddb,$dbname);
	return $conectar;
}	
=======
	$servername = "localhost";
	$database = "cinemat";
	$username = "root";
	$password = "";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	// mysqli_close($conn);
>>>>>>> e950623f1d6309b0e2b122637b3f4e7ed6cac6cc
?>