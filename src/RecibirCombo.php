<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $detalles=$_POST['detalles'];
    $precio=$_POST['precio'];
    $imagen=$_POST['imagen'];
    

    echo "Los datos son los siguinetes: <br>";
    echo "$nombre,$detalles,$precio,$imagen";
  

    $conectar=conn();
    $sql="INSERT INTO combo(ID_COMBO,NOMBRE,DESCRIPCION, PRECIO_VENTA,IMAGEN) 
    VALUES ('','$nombre','$detalles','$precio','$imagen')";
     $resul = mysqli_query($conectar, $sql)or triger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

     echo "$sql";
?>