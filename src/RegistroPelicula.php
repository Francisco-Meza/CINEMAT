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
        <?php
            include_once("Connect.php");
            Cconexion::conexionBD();
        ?>
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
                <form  class="formulario" action="recibirPelicula.php" method="$_POST">
                    <dic class="formulario__h2">
                        <h2>Registro de pelicula</h2>
                    </dic>
                    <!-------------------------NOMBRE----------------------->
                    <div class="formulario__grupo" id="grupo__nombre">
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
                    <div class="formulario__grupo" id="grupo__idioma">
                        <label for="nombre" class="formulario__label">Idioma</label>
                        <div class="formulario__grupo-input">
                           <!--<input type="text" class="formulario__input" name="idioma" id="idioma" placeholder="Idioma de la pelicula">--> 
                            <select class="formulario__input" name="idioma" id="">
                                <option value="1">Primer Valor</option>
                                <option value="2">Segundo Valor</option>
                                <option value="3">Tercer Valor</option>
                            </select>
                        </div>
                    </div>
                    <!-------------------------DURACIÓN----------------------->
                    <div class="formulario__grupo" id="grupo__duracion">
                        <label for="nombre" class="formulario__label">Duraci&oacute;n</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="idioma" id="idioma" placeholder="Idioma de la pelicula">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>La duraci&oacute;n solo debe contener n&uacute;mero</p>
                        </div>
                    </div>
                    <!-------------------------CLASIFICACIÓN----------------------->
                    <div class="formulario__grupo" id="grupo__clasificacion">
                        <label for="nombre" class="formulario__label">Clasificaci&oacute;n</label>
                        <div class="formulario__grupo-input">
                           <!--<input type="text" class="formulario__input" name="clasificacion" id="clasificacion" placeholder="Clasificación de la pelicula">--> 
                            <select class="formulario__input" name="idioma" id="">
                                <option value="1">Primer Valor</option>
                                <option value="2">Segundo Valor</option>
                                <option value="3">Tercer Valor</option>
                            </select>
                        </div>
                    </div>
                    <!-------------------------GENERO----------------------->
                    <div class="formulario__grupo" id="grupo__genero">
                        <label for="nombre" class="formulario__label">Gen&eacute;ro</label>
                        <div class="formulario__grupo-input">
                            <!--<input type="text" class="formulario__input" name="genero" id="genero" placeholder="Género de la pelicula">-->
                            <select class="formulario__input" name="idioma" id="">
                                <option value="1">Primer Valor</option>
                                <option value="2">Segundo Valor</option>
                                <option value="3">Tercer Valor</option>
                            </select>
                        </div>
                    </div>
                    <!-------------------------FORMATO----------------------->
                    <div class="formulario__grupo" id="grupo__formato">
                        <label for="nombre" class="formulario__label">Formato</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="formato" id="formato" placeholder="Formato de la pelicula">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El formato solo debe contener letras</p>
                        </div>
                    </div>
                    <!-------------------------PORTADA----------------------->
                    <div class="formulario__grupo"id="grupo__portada">
                        <label for="nombre" class="formulario__label">Portada</label>
                        <div class="formulario__grupo-input">
                            <div class="file__botton" >
                                <input class="file__input-botton"type="file" name="portada" id="portada" placebolder="Portada">
                            </div>
                        </div>
                    </div>
                    <!-------------------------INFORMACIÓN----------------------->
                    <div class="formulario__grupo" id="grupo__informacion">
                        <label for="nombre" class="formulario__label">Informaci&oacute;n </label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="informacion" id="informacion" placeholder="Información de la pelicula">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>la Informaci&oacute;n  solo debe contener letras</p>
                        </div>
                    </div>
                    <div class="formulario__button">
                        <div class="formulario__button-mensaje">
                            <p>Porfavor llena todos los campos correctamente</p>
                            <i class="formulario__warning fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <button class="button-general" type="submit">Enviar</button>
                    </div>
                </form>  
        </div>
        <Script src="js/formulario.js"></Script>
    </body>
</html>