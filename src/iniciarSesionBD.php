<?php
    if(isset($_POST["CORREO"])){
        $CORREO=addslashes($_POST["CORREO"]);
    }
    else{
        $CORREO="";        
    }
    if(isset($_POST["PASSWORD"])){
        $PASSWORD=addslashes($_POST["PASSWORD"]);
    }
    else{
        $PASSWORD="";
    }
    include('connect.php');
        $consulta="select * from CLIENTE where CORREO='$CORREO' and PASSWORD='$PASSWORD'";
        $resultado=mysqli_query($conn, $consulta)or die('Error al consultar administrador');
        $i=1;
        while($fila=mysqli_fetch_array($resultado)){
        echo 'Sesión iniciada';
        session_start();
        $_SESSION['CORREO']=$CORREO;
        $_SESSION['PASSWORD']=$PASSWORD;
        header("Location: index.php");
        die;
        }
    header("Location: login.php?error=1");

?>