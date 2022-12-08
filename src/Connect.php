<?php
class Cconexion{


	static function conexionBD(){
		$host='localhost';
		$dbname='CINEMAT_IXTAN';
		$username='sa';
		$pasword='021202';
		$puerto=1433;

		try{
			$conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
			echo "se conectó correctamente a la base de datos";
		}
		catch(PDOException $exp){
			echo ("No se logró conectar correctamente con la base de datos: $dbname,error: $exp");
		}
		return $conn;
	}
	
}
?>