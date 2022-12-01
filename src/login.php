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
                include("conexion.php");
            ?>
            <div class="formulario__h2">
                    <h2>Login</h2>
            </div>
                <br>
                <form class="formulario" action="" onsubmit="return validar();">
                <!-------------------------NOMBRE----------------------->
                   <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                     <!---------------------------CORREO-------------------------------------------------->
                     <div class="formulario__grupo" id="grupo__correo">
                        <label for="correo" class="formulario__label">Correo electronico</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="correo" id="correo">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El correo debe tener un formato correcto</p>
                        </div>
                    </div>
                    <!---------------------------CONTRASEÑA-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__password">
                        <label for="password" class="formulario__label">Contrase&ntilde;a</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="password" name="password" id="password">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>La contrase&ntilde;a debe contener al menos una mayuscula, minuscula y un numero</p>
                        </div>
                    </div>
                    <!---------------------BOTON------------------------->
                    <div class="formulario__button">
                        <div class="formulario__button-mensaje">
                            <p>Porfavor llena todos los campos correctamente</p>
                            <i class="formulario__warning fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <button class="button-general" type="submit">Enviar</button>
                    </div>
                    
                    <!-- <center>
                        <button class="button-general" type="submit">Aceptar</button>
                    </center>-->
                    <br> 
                    <center>
                    <c> <a href = "http://google.com">¿Olvidaste la constraseña?</a></c>
                    <br>
                    <br>
                    <center>  
                    <b>Ingresar con</b>
                    <br>
                    <br>
                    <center>      
                    <a>¿No tienes cuenta? <a href = "RegistroUsuario.php">Reg&iacute;strate aqu&iacute;</a></a>
                    <br>
                </form>  
        </div>
        <script src="js/formulario.js"></script>
    </body>
</html>