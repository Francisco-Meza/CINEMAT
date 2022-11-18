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
                <form  action="" onsubmit="return validar();">
                    <label for="" >Nombre</label>
                    <br>
                    <input type="text" name="nombre" id="nombre" pattern="Nombre de la pelicula">
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
                    <br>
                    <center>
                        <button class="button-general" type="submit">Enviar</button>
                    </center>
                </form>  
        </div>
        <Script>
            function validar(){
                nombreInput = document.getElementById("nombre");
                nombre = nombreInput.value;
                if(nombre.length >10){
                    nombreInput.value = 'Debe tener menos de 10 caracteres'
                    nombreInput.focus();
                    return false
                }
                document.form.submit();
            }
        </Script>
    </body>
</html>