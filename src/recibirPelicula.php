<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $duracion=$_POST['duracion'];
    $genero=$_POST['genero'];
    $idioma=$_POST['idioma'];
    $clasificacion=$_POST['clasificacion'];
    $informacion=$_POST['informacion'];
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
    $sql="INSERT INTO pelicula(NOMBRE, ID_IDIOMA, DURACION,ID_CLASIFICACION,ID_GENERERO,PORTADA,INFORMACION)
     VALUES ('$nombre','$idioma','$duracion','$clasificacion','$genero','$foto','$informacion')";
     $resul = mysqli_query($conn, $sql)or triger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);
    header("Location:index.php")
?>