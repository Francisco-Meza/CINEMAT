<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $password=$_POST['password']
    $foto = "";
    if(isset($_FILES['foto']['name']))
    {
        $archivo_temporal=$_FILES['foto']['tmp_name'];
        $f1 = fopen($archivo_temporal, "rb");
        
        $foto_size=$_FILES['foto']['size'];
        $foto_recovertida = fread($f1, $foto_size);
        
        $foto_recovertida=addslashes($foto_recovertida);
        $foto=$foto_recovertida;
    }
    echo "Los datos son los siguinetes: <br>";
    echo "$nombre,$apellidos,$correo,$password,$foto";
    $conectar=conn();
    $sql="INSERT INTO usuario(ID_USUARIO,NOMBRE,APELLIDOS, CORREO, PASSWOR, FOTO) 
    VALUES ('','$nombre','$apellidos','$correo','$password','$foto')";
     $resul = mysqli_query($conectar, $sql)or triger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);
     echo "$sql";
     header("Location:MostrarUsuarios.php")
?>