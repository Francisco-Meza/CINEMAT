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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                        <textarea name="sugerencia" id="sugerencia" cols="30" rows="10"></textarea>
                    <center>
                        <button class="button-general">Enviar</button>
                    </center>     
            </div>
        </div>
    </body>
</html>