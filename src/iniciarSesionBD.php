<?php
    if(isset($_POST["correo"])){
        $correo=addslashes($_POST["correo"]);
    }
    else{
        $correo="";        
    }
    if(isset($_POST["password"])){
        $password=addslashes($_POST["password"]);
    }
    else{
        $password="";
    }
    include('connect.php');
        $consulta="select * from administrador where correo='$correo' and password='$password'";
        $resultado=mysqli_query($conn, $consulta)or die('Error al consultar administrador');
        $i=1;
        while($fila=mysqli_fetch_array($resultado)){
        echo 'Sesión iniciada';
        session_start();
        $_SESSION['correo']=$correo;
        $_SESSION['password']=$password;
        header("Location: index.php");
        die;
        }
    header("Location: login.php?error=1");

?>