<!DOCTYPE html>
<html lang="es">
<head>
    <title>CINEMAT</title>
    <link rel="stylesheet" href="css/style.css" />
    <a href="comboPrueba.html"></a>
</head>
<body>
    <div class="container">
        <?php
            include('nav.html');
            include('Connect.php');
        $query = "SELECT ID_COMBO,NOMBRE,DESCRIPCION,PRECIO_VENTA,IMAGEN FROM COMBO";
        $res = mysqli_query($conn, $query) or die("No se pudo realizar la consulta");
        ?>
        <div class="portadas">
            <?php
                while($row = mysqli_fetch_assoc($res)){
            ?>
                <div class="portadas-banner" onclick="verIformacion(this.id)" id="<?php echo $row['ID_COMBO']; ?>">
                <h3><?php echo $row['NOMBRE']; ?></h3>
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN']); ?>" alt="">
                <button class="button-portada">Detalles</button>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <script>
        function verIformacion(id){
            window.location.href = "informacionCombo.php?id="+id;
        }
    </script>
</body>
</html>