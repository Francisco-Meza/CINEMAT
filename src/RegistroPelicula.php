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
                <form  id="formularioPelicula" action="">
                    <dic class="formulario__h1">
                        <h1>Registro de pelicula</h1>
                    </dic>
                    <!-------------------------NOMBRE----------------------->
                    <div class="formulario__grupo">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre de la pelicula">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                    <!-------------------------IDIOMA----------------------->
                    <div class="formulario__grupo">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Español">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                    <!----<br>
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
                    <br>---->
                    <div class="formulario__botones">
                        <button class="button-general" type="submit">Enviar</button>
                    </div>
                </form>  
        </div>
        <!--<Script src="js/formulario.js"></Script>-->
    </body>
</html>