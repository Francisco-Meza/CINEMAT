<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];

    echo "Los datos son los siguinetes: <br>";
    echo "$nombre,$apellidos,$fecha_nacimiento,$correo,$password";

    $conectar=conn();
    $sql="INSERT INTO CLIENTE(ID_CLIENTE, NOMBRE, APELLIDOS, FECHA_NACIMIENTO, correo, password)
     VALUES ('','$nombre','$apellidos','$fecha_nacimiento','$correo','$password'')";
     $resul = mysqli_query($conectar, $sql)or triger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

     echo "$sql";
?>