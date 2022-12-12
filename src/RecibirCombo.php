<?php
    include("Connect.php");
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio_venta'];

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo "Si hay id" . $_FILES['imagen']['name'];
        $sql = "UPDATE combo SET NOMBRE ='$nombre',DESCRIPCION='$descripcion',PRECIO_VENTA='$precio'";
        if($_FILES['imagen']['name']!="")
        {
            $imagen = ConvertirImagen();
            $sql = $sql.", imagen = '$imagen'";
        }
        $sql = $sql . "WHERE ID_COMBO = $id";
        $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
    }else{
        $imagen=ConvertirImagen();
        $sql="INSERT INTO combo(NOMBRE,DESCRIPCION, PRECIO_VENTA,IMAGEN) 
        VALUES ('$nombre','$descripcion','$precio','$imagen')";
         $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
    }
    header("Location:comboPrueba.php");
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