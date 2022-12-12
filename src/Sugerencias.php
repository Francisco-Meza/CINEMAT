<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sugerencias</title>
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
                    <p class= "centrado-hijo">
                    Si requieres presentar una sugerencia para la mejora en los servicios brindados por el cinemat, 
                    o un reconocimiento al personal que te brindó atención, ponemos a tu disposición este apartado  
                    a través de la cual podrás enviar tus propuestas.
                    </p>
                        <textarea name="sugerencia" id="sugerencia" cols="30" rows="10"></textarea>
                    <center>
                        <button class="button-general">Enviar</button>
                    </center>     
            </div>
        </div>
    </body>
</html>