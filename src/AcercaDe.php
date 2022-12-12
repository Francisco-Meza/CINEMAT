<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Acerca De</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class= "container">
            <?php
                include("nav.php");
                    if(!isset($_SESSION["correo"])){
                        header("Location: login.php");
                }
            ?>
            <div class="centrado">
                    <center>
                        <br>
                        <img class="bordes"src="assets/usuario.png">  
                    </center>
                    <p class= "centrado-hijo">
                        Cinemat es una pequeña empresa dedicada al entretenimiento, ofrece paquetes a muy buen precio y
                        ofertas de grandes estrenos, el objetivo de Cinemat es brindarle un buen servicio a los clientes.
                        Cinemat se encuentra ubicada en la calle Justo barajas #82 sur en la colonia centro del municipio de Ixtlan del Río, del estado de Nayarit,México.
                    </p>                        
            </div>
        </div>
    </body>
</html>