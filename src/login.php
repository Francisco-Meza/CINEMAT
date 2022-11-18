<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php
                include("nav.html");
            ?>
                <br>
                <form action="" onsubmit="return validar();">
                    <label for="" >Nombre</label>
                    <br>
                    <input type="text" name="nombre" id="nombre" pattern="NombrePelicula">
                    <br>
                    <label for="">Email</label>
                    <br>
                    <textarea  name="email" id="Email" pattern="Email"></textarea>
                    <br>
                    <label for="">Contrase&ntilde;a</label>
                    <br>
                    <input type="text" name="contrasenia" id="Contrasenia" pattern="Contrasenia">
                    <br>
                        <button class="button-general" type="submit">Enviar</button>
                        
                </form>  
        </div>
        
    </body>
</html>