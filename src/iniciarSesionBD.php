<?php
    if(isset($_POST["correo"])){
        $correo=addslashes($_POST["correo"]);
    }
    else{
        $correo="";        
    }
    if(isset($_POST["password"])){
        $pass=addslashes($_POST["password"]);
    }
    else{
        $pass="";
    }
    include('Connect.php');
        $consulta="SELECT * FROM usuario WHERE CORREO='$correo' AND PASSWOR='$pass'";
        $res=mysqli_query($conn, $consulta)or die('Error al consultar administrador');
        $data = mysqli_fetch_assoc($res);
        if (isset($data)) {
            // echo 'Sesión iniciada';
            session_start();
            $_SESSION['correo']=$data['CORREO'];
            $_SESSION['password']=$data['PASSWOR'];
            header("Location: index.php");
        die;
        }
        // echo 'Sesión no iniciada';
        header("Location: login.php?error=1");
?>

