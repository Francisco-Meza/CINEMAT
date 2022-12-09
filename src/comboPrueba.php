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
                    include('Connect.php');
                    include('nav.html');
                    session_start();
                    if(!isset($_SESSION["correo"])){
                        header("Location: login.php");
                    }
                ?>

        <div class="portadas">
            <div class="portadas-banner">
                <h2>Combo Feliz</h2>
                <a><button href="InformacionPelicula.php" class="button-portada">Detalles</button></a>
            </div>
            <div class="portadas-banner">
                <h2>Combo Pareja</h2>
                <button class="button-portada">Detalles</button>
            </div>
            <div class="portadas-banner">
                <h2>Navidad</h2>
                <button class="button-portada">Detalles</button>
            </div>
            <div class="portadas-banner">
                <h2>Estudiantes</h2>
                <button class="button-portada">Detalles</button>
            </div>
        </div>
    </body>
</html>