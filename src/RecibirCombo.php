<?php

    include("Connect.php");
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo "Si hay id" . $id;
        if(isset($_FILES['imagen']['name']))
        {
            $imagen = ConvertirImagen();
        }
    }else{
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $imagen=ConvertirImagen();
        $sql="INSERT INTO combo(NOMBRE,DESCRIPCION, PRECIO_VENTA,IMAGEN) 
        VALUES ('$nombre','$descripcion','$precio','$imagen')";
         $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
         header("Location:comboPrueba.php");
    }
        function ConvertirImagen(){
            if(isset($_FILES['imagen']['name']))
            {
                $archivo_temporal=$_FILES['imagen']['tmp_name'];
                $f1 = fopen($archivo_temporal, "rb");
                
                $imagen_size=$_FILES['imagen']['size'];
                $imagen_recovertida = fread($f1, $imagen_size);
                
                $imagen_recovertida=addslashes($imagen_recovertida);
                return $imagen_recovertida;
            }
        }
?>