<?php
class Cconexion{


	function conexionBD(){
		$host='localhost';
		$dbname='CINEMAT_VALLARTA';
		$username='Marlene';
		$pasword='0602';
		$puerto=1433;

		try{
			$conn = new PDO ("sqlsrv:Server-$host,$puerto;Database-$dbname"$dbname,$username,$pasword);
			echo "se conectó correctamente a la base de datos";
		}
		catch(PDOException $exp){
			echo("No se logró conectar correctamente con la base de datos: $dbname,error: $exp")
		}
		return $conn;
	}
	
}
?>