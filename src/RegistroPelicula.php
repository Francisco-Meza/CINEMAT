<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registro de una pelicula</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php
                include("nav.html");
            ?>
            <br>
            <nav>
                <ul>
                    <li><a href="RegistroCombo.php">Registro Combo</a></li>
                    <li><a href="RegistroPelicula.php">Registro Pel&iacute;cula</a></li>
                </ul>
            </nav>
            <br>
                <form  id="formulario" action="" onsubmit="return validar();">
                    <label for="" >Nombre</label>
                    <br>
                    <input type="text" name="nombre" id="nombre" pattern="Nombre de la pelicula">
                    <br>
                    <label for="">Idioma</label>
                    <br>
                    <input type="text" name="idioma" id="idioma" pattern="Idioma de la pelicula">
                    <br>
                    <label for="">Duraci&oacute;n</label> 
                    <br>
                    <input type="text" name="duración" id="duración" pattern="Nombre de la pelicula">
                    <br>
                    <label for="">Clasificaci&oacute;n </label>
                    <br>
                    <input type="text" name="clasificacion" id="clasificacion" pattern="Clasificación de la pelicula">
                    <br>
                    <label for=""> G&eacute;nero </label> 
                    <br>
                    <input type="text" name="genero" id="genero" pattern="Género de la pelicula">
                    <br>
                    <label for="">Formato</label>
                    <br>
                    <input type="text" name="formato" id="formato" pattern="Formato de la pelicula">
                    <br>
                    <label for="">Portada</label>
                    <br>
                    <input type="text" name="portada" id="Portada" pattern="Portada de la pelicula">
                    <br>
                    <label for="">Informaci&oacute;n </label>
                    <br>
                    <textarea  name="información" id="información" pattern="Información de la pelicula"></textarea>
                    <br>
                    <br>
                    <center>
                        <button class="button-general" type="submit">Enviar</button>
                    </center>
                </form>  
        </div>
        <Script src="js/formulario.js"></Script>
    </body>
</html>