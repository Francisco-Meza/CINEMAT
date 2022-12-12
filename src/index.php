<!DOCTYPE html>
<html lang="es">
<head>
    <title>CINEMAT</title>
    <link rel="stylesheet" href="css/style.css">
    <a href="dulceria.html"></a>
</head>
<body>
    <div class="container">
        <?php
            include('Connect.php');
            include('nav.php');

        $query = "SELECT ID_PELICULA, NOMBRE, PORTADA FROM PELICULA";
        $res = mysqli_query($conn, $query) or die("No se pudo realizar la consulta");
        ?>
        <div class="portadas">
            <?php
                while($row = mysqli_fetch_assoc($res)){
            ?>
                <div class="portadas-banner" onclick="verIformacion(this.id)" id="<?php echo $row['ID_PELICULA']; ?>">
                <h3><?php echo $row['NOMBRE']; ?></h3>
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['PORTADA']); ?>" alt="">
                <button class="button-portada">Detalles</button>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <script>
        function verIformacion(id){
            window.location.href = "informacionPelicula.php?id="+id;
        }
    </script>
</body>
</html>