<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body text="white">
        <div class="container">
            <?php
                include("nav.html");
            ?>
                <br>
                <form action="" onsubmit="return validar();">
                    <label for="" >Nombre</label>
                    <br>
                    <input type="text" name="usuario" id="usuario" pattern="NombreUsuario">
                    <br>
                    <label for="">Correo</label>
                    <br>
                    <input type="text" name="correo" id="correo" pattern="correo"></input>
                    <br>
                    <label for="">Contrase&ntilde;a</label>
                    <br>
                    <input type="text" name="contrasenia" id="Contrasenia" pattern="Contrasenia">
                    <br>
                    <br>
                    <center>
                        <button class="button-registro" type="submit">Aceptar</button>
                    </center>
                    <br>
                    <center>
                    <c> <a href = "http://google.com">¿Olvidaste la constraseña?</a></c>
                    <br>
                    <br>
                    <!-- <center>   -->
                    <b>Ingresar con</b>
                    <br>
                    <br>
                    <!-- <center>      -->
                    <a>¿No tienes cuenta? <a href = "RegistroUsuario.php">Reg&iacute;strate aqu&iacute;</a></a>
                    <br>  
                </form>  
        </div>
        <script src="js/formulario.js"></script>
    </body>
</html>