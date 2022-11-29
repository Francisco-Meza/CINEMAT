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
                    <!-------------------------DETALLES----------------------->
                    <div class="formulario__grupo">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <textarea type="text" class="formulario__textarea" name="nombre" id="nombre" placeholder="Descripci&oacute;n de la pelicula"></textarea>
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                <!--
                    <label for="" >Nombre</label>
                    <br>
                    <input type="text" name="nombre" id="nombre" pattern="Nombre de la pelicula">
                    <br>
                    <label for="">Detalles</label>
                    <br>
                    <textarea  name="detalles" id="Detalles" pattern="Detalles "></textarea>
                    <br>
                    <label for="">Precio</label>
                    <br>
                    <input type="text" name="precio" id="precio" pattern="Precio">
                    <br>
                    <br>
                    <center>
                        <button class="button-general" type="submit">Enviar</button>
                    </center>  --> 
                </form>  
        </div>
        <script src="js/formulario.js"></script>
    </body>
</html>