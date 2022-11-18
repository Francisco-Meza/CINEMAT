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
                <h2>Registro de pelicula</h2>
                <form class="form" action="">
                        <div class="contenedor-form">
                                <label for="">Nombre</label>
                                <br>
                                <input type="text" name="Nombre" class="nombre" pattern="Nombre de la pelicula">
                                <br>
                                <label for="">Idioma</label>
                                <br>
                                <input type="text" name="Idioma" class="idioma" pattern="Idioma de la pelicula">
                                <br>
                                <label for="">Duraci&oacute;n</label>
                                <br>
                                <input type="text" name="Duración" class="duración" pattern="Nombre de la pelicula">
                                <br>
                                <label for="">Clasificaci&oacute;n </label>
                                <br>
                                <input type="text" name="Clasificacion" class="clasificacion" pattern="Clasificación de la pelicula">
                                <br>
                                <label for=""> G&eacute;nero </label>
                                <br>
                                <input type="text" name="Genero" class="genero" pattern="Género de la pelicula">
                                <br>
                                <label for="">Formato</label>
                                <br>
                                <input type="text" name="Formato" class="formato" pattern="Formato de la pelicula">
                                <br>
                                <label for="">Portada</label>
                                <br>
                                <input type="text" name="portada" class="Portada" pattern="Portada de la pelicula">
                                <br>
                                <label for="">Informaci&oacute;n </label>
                                <br>
                                <textarea  name="Información" class="información" pattern="Información de la pelicula">
                                <br>
                                
                            <button class="button-general" type="submit">Enviar</button>
                        </div>
                </form>  
        </div>
    </body>
</html>