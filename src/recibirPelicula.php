<?php
    $con mysqli_connect('localhost','root','formaulario')or die('Error en la conexion servidor');
    $sql "INSERT INTO pelicula 
    VALUES(null,'".$_POST["NOMBRE"]."','".$_POST["IDIOMA"]."','".$_POST["DURACION"]."','".$_POST["CLASIFICACION"]."','".$_POST["GENERO"]."','".$_POST["FORMATO"]."','".$_POST["PORTADA"]."','".$_POST["INFORMACION"]."')";
        $resultado mysqli_query($con,$sql)or die ('Error en el query de la base de datos');
        mysqli_close($con$);
    ?>