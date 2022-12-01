<!DOCTYPE html>
<html>
    <head>
        <title>Registro Combo</title>
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
                <form class="formulario" action="" onsubmit="return validar();">
                <!-------------------------NOMBRE----------------------->
                <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del combo">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                    <!-------------------------DETALLES----------------------->
                    <div class="formulario__grupo" id="grupo__detalles">
                        <label for="nombre" class="formulario__label">Descripci&oacute;n</label>
                        <div class="formulario__grupo-input">
                            <textarea type="text" class="formulario__textarea" name="descripcion" id="descripcion" placeholder="Descripci&oacute;n de la pelicula"></textarea>
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>La descripci&oacute;n solo debe contener letras</p>
                        </div>
                    </div>
                    <!-------------------------IMAGEN----------------------->
                    <div class="formulario__grupo" id="grupo__imagen">
                        <label for="nombre" class="formulario__label">Imagen</label>
                        <div class="formulario__grupo-input">
                            <div class="file__botton" >
                                <input type="file" name="imagen" id="imagen" placebolder="imagen">
                            </div>
                        </div>
                        
                    </div>
                    <!-------------------------PRECIO----------------------->
                    <div class="formulario__grupo" id="grupo__precio">
                        <label for="nombre" class="formulario__label">Precio</label>
                        <div class="formulario__grupo-input">
                            <textarea type="text" class="formulario__textarea" name="precio" id="precio" placeholder="precio del combo"></textarea>
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El precio solo debe contener números</p>
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
        <script src="js/formulario.js"></script>
    </body>
</html>