<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors', 1);
error_reporting(E_ALL);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'cinemat';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)
	or die ('Ocurrio un error al conectarse al servidor mysql');
?>