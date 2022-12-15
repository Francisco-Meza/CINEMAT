<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $apellidos=$_POST["apellidos"];
    $fecha_nacimiento=$_POST["fecha_nacimiento"];
    $correo=$_POST["correo"];
    $password=$_POST["password"];
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo "Si hay id" . $_FILES['foto']['name'];
        $sql = "UPDATE usuario SET NOMBRE ='$nombre',APELLIDOS='$apellidos',FECHA_NACIMIENTO='$fecha_nacimiento',CORREO='$correo'";
        if($_FILES['foto']['name']!="")
        {
            $foto = ConvertirImagen();
            $sql = $sql.", foto = '$foto'";
        }
        if($password != ""){
            $sql = $sql.", PASSWOR='$password'";
        }
        $sql = $sql . "WHERE ID_USUARIO = $id";
        $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
    }else{
        $foto=ConvertirImagen();
        $sql="INSERT INTO usuario (NOMBRE,APELLIDOS, FECHA_NACIMIENTO, CORREO, PASSWOR, FOTO) 
        VALUES ('$nombre','$apellidos','$fecha_nacimiento','$correo', '$password', '$foto')";
         $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
    }
    header("Location:usuarios.php");
        function ConvertirImagen(){
            if(isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != "")
            {
                $archivo_temporal=$_FILES['foto']['tmp_name'];
                $f1 = fopen($archivo_temporal, "rb");
                
                $imagen_size=$_FILES['foto']['size'];
                $imagen_recovertida = fread($f1, $imagen_size);
                
                $imagen_recovertida=addslashes($imagen_recovertida);
                return $imagen_recovertida;
            }else{
                return "";
            }
        }
?>