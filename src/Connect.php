<?php

function conn(){

	$hostname ="localhost";
	$usuario = "root";
	$passworddb = "";
	$dbname ="cinemat";
	
	$conectar = mysqli_connect($hostname,$usuario,$passworddb,$dbname);
	return $conectar;
}	
?>