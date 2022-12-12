<?php
    include("Connect.php");
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo "Si hay id" . $id;
        if(isset($_FILES['foto']['name']))
        {
            $foto = ConvertirImagen();
        }
    }else{
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $correo=$_POST['correo'];
        $password=$_POST['password'];
        $foto = ConvertirImagen();
        $sql="INSERT INTO usuario(ID_USUARIO,NOMBRE,APELLIDOS, CORREO, PASSWOR, FOTO)
        VALUES ('$nombre','$apellidos','$correo','$password','$foto')";
        $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
        header("Location: MostrarUsuarios.php");
    }
    function ConvertirImagen(){
        if(isset($_FILES['foto']['name']))
        {
            $archivo_temporal=$_FILES['foto']['tmp_name'];
            $f1 = fopen($archivo_temporal, "rb");
            
            $foto_size=$_FILES['foto']['size'];
            $foto_recovertida = fread($f1, $foto_size);
            
            $foto_recovertida=addslashes($foto_recovertida);
            return $foto_recovertida;
        }
    }
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $fecha_nacimiento=$_POST["fecha_nacimiento"];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
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