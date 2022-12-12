<?php
    /*if(isset($_POST["correo"])){
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
    }*/
    $correo = "balazo@gmail.com";
    $pass = "1234";
    include('Connect.php');
        $consulta="SELECT * FROM usuario WHERE CORREO='$correo' AND PASSWOR='$pass'";
        $res=mysqli_query($conn, $consulta)or die('Error al consultar administrador');
        $data = mysqli_fetch_assoc($res);
        if (isset($data)) {
            echo 'Sesión iniciada';
            /*session_start();
            $_SESSION['correo']=$correo;
            $_SESSION['password']=$password;
            header("Location: index.php");*/
        die;
        }
        echo 'Sesión no iniciada';
    //header("Location: login.php?error=1");
?>

