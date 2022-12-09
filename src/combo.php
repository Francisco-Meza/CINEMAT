<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Combos</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- Contenido principal -->
        <div class="container">
                <?php
                    include('nav.html');
                    session_start();
                    if(!isset($_SESSION["correo"])){
                        header("Location: login.php");
                    }
                ?>
            <div class="portadas">
                <!-- Inicio producto1 -->
                <!-- <div class="combos"> -->
                    <div class="portadas-banner-combo">
                        <img src="../assets/grandes.png" alt="palomitasGrandes">
                    </div>
                    <div class="infoProducto">
                        <p class="prodNombre">Familiar</p>
                        <p class="prodPrecio">$130.00</p>
                    </div>
                <!-- </div> -->
                <!-- Inicio producto2 -->
                <!-- <div class="combos"> -->
                    <div class="portadas-banner-combo">
                        <img src="../assets/medianas.png" alt="sencillas">
                    </div>
                    <div class="infoProducto">
                        <p class="prodNombre">Kiki</p>
                        <p class="prodPrecio">$80.00</p>
                    </div>
                <!-- </div> -->
                    <!-- Inicio producto2 -->
                <!-- <div class="combos"> -->
                    <div class="portadas-banner-combo">
                        <img src="../assets/medianas.png" alt="sencillas">
                    </div>
                    <div class="infoProducto">
                        <p class="prodNombre">Perron</p>
                        <p class="prodPrecio">$120.00</p>
                    </div>
                <!-- </div> -->
            </div> 
    </body>
</html>