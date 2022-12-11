<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $duracion=$_POST['duracion'];
    $genero=$_POST['genero'];
    $idioma=$_POST['idioma'];
    $clasificacion=$_POST['clasificacion'];
    $informacion=$_POST['informacion'];
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo "Si hay id" . $_FILES['foto']['name'];
        $sql = "UPDATE PELICULA SET NOMBRE = '$nombre', DURACION = '$duracion', ID_GENERERO = $genero, ID_IDIOMA = $idioma, ID_CLASIFICACION = $clasificacion, INFORMACION='$informacion'";
        if($_FILES['foto']['name'] != "")
        {
            $foto = ConvertirImagen();
            $sql = $sql.", PORTADA = '$foto'";
        }
        $sql = $sql . "WHERE ID_PELICULA = $id";
        $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
    }else{
        $foto = ConvertirImagen();
        $sql="INSERT INTO pelicula(NOMBRE, ID_IDIOMA, DURACION,ID_CLASIFICACION,ID_GENERERO,PORTADA,INFORMACION)
        VALUES ('$nombre','$idioma','$duracion','$clasificacion','$genero','$foto','$informacion')";
        $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
    }
    header("Location:index.php");
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
?>