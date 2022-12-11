<?php
    $nombre=$_POST["nombre"];
    $apellidos=$_POST['apellidos']
    $fecha_nacimiento=$_POST['fechaNacimiento']
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $foto="";
    if(isset($_FILES['foto']['name'])){
        $archivo_temporal = $_FILES['foto']['tmp_name'];
        /*reconversion de la imagen para meter en la tabla 
        abrimos el fichero temporal en modo lectura "r" binaria "b"*/
        $f1 = fopen($archivo_temporal,'rb');
        //leemos al fichero completo limitado 
        //la lectura al tamaño de fichero 
        $foto_size=$_FILES['foto']['size'];
        $foto_reconvertida = fread ($f1, $foto_size);
        //#anteponemos  \ a las comillas que pudieran contener el fichero 
        //# para evitar que sean interpretadas como fila de cadena 
        $foto_reconvertida = addslashes($foto_reconvertida);
        $foto=$foto_reconvertida;

    }
    $cadenaInsertar="insert into personal" . 
    " (nombre, id_puesto, telefono, correo, foto)" . 
    " values('".$nombre."'," . $id_puesto ." ,'".$telefono."', '".$correo."','".$foto."')";
    include("connect.php");
    mysqli_query($conn, $cadenaInsertar) 
    or die ("Error al insertar");
    header("Location: RegistroUsuario.php");
?>


