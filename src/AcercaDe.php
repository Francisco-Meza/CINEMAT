<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Acerca De</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class= "container">
            <?php
                include("nav.html");
                // session_start();
                // if(!isset($_SESSION["correo"])){
                //     header("Location: login.php");
                // }
            ?>
            <div class="centrado">
                    <center>
                        <br>
                        <img class="bordes"src="assets/usuario.png">  
                    </center>
                    <p class= "centrado-hijo">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <center>
                        <button class="button-general">Contacto</button>
                    </center>
                        
            </div>
        </div>
    </body>
</html>