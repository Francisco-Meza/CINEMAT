<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registro de una pelicula</title>
        <link rel="stylesheet" href="css/style.css">
        <Script>
            nombre = document.getElementById("h22").style.border = "5px solid black";
            alert("Esto es "+nombre);
        </Script>
    </head>
    <body>
        <div class="container">
            <?php
                include("nav.html");
            ?>
                <h2 id="h22">Registro de pelicula</h2>
                <form class="form" action="">
                        <div class="contenedor-form">
                                <label for="" >Nombre</label>
                                <br>
                                <input type="text" name="Nombre" id="nombre" pattern="Nombre de la pelicula">
                                <br>
                                <label for="">Idioma</label>
                                <br>
                                <input type="text" name="Idioma" id="idioma" pattern="Idioma de la pelicula">
                                <br>
                                <label for="">Duraci&oacute;n</label>
                                <br>
                                <input type="text" name="Duración" id="duración" pattern="Nombre de la pelicula">
                                <br>
                                <label for="">Clasificaci&oacute;n </label>
                                <br>
                                <input type="text" name="Clasificacion" id="clasificacion" pattern="Clasificación de la pelicula">
                                <br>
                                <label for=""> G&eacute;nero </label>
                                <br>
                                <input type="text" name="Genero" id="genero" pattern="Género de la pelicula">
                                <br>
                                <label for="">Formato</label>
                                <br>
                                <input type="text" name="Formato" id="formato" pattern="Formato de la pelicula">
                                <br>
                                <label for="">Portada</label>
                                <br>
                                <input type="text" name="portada" id="Portada" pattern="Portada de la pelicula">
                                <br>
                                <label for="">Informaci&oacute;n </label>
                                <br>
                                <textarea  name="Información" id="información" pattern="Información de la pelicula"></textarea>
                                <br>
                            <button class="button-general" type="submit">Enviar</button>
                        </div>
                </form>  
        </div>
    </body>
</html>