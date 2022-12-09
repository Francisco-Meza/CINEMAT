<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $duracion=$_POST['duracion'];
    $genero=$_POST['genero'];
    $idioma=$_POST['idioma'];
    $clasificacion=$_POST['clasificacion'];
    $formato=$_POST['formato'];
    $portada=$_POST['portada'];
    $informacion=$_POST['informacion'];

    echo "Los datos son los siguinetes: <br>";
    echo "$nombre,$duracion,$genero,$idioma,$clasificacion,$formato,$portada,$informacion";
  

    $conectar=conn();
    $sql="INSERT INTO pelicula(ID_PELICULA, NOMBRE, IDIOMA, DURACION,CLASIFICACION,GENERO,FORMATO,PORTADA,INFORMACION)
     VALUES ('','$nombre','$idioma','$duracion','$clasificacion','$genero','$formato','$portada','$informacion')";
     $resul = mysqli_query($conectar, $sql)or triger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

     echo "$sql";
?>
 