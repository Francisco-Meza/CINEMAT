<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php
                include("nav.php");
                include("Connect.php");
                if(!isset($_SESSION["correo"])){
              ?> 
                    <div class="formulario__h2">
                    <h2>Login</h2>
            </div>
                <br>
                <form id="formularioLogin" action="iniciarSesionBD.php" method="POST" onsubmit="return validar();">
                     <!---------------------------CORREO-------------------------------------------------->
                     <div class="formulario__grupo" id="grupo__correo">
                        <label for="correo" class="formulario__label">Correo electronico</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="correo" id="correo" placeholder="example@example.com">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El correo debe tener un formato correcto</p>
                        </div>
                    </div>
                    <!---------------------------CONTRASEÑA-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__password">
                        <label for="password" class="formulario__label" >Contrase&ntilde;a</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="password" name="password" id="password">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>La contrase&ntilde;a debe contener al menos una mayuscula, minuscula y un numero</p>
                        </div>
                    </div>
                    <center>
                        <?php
                            if(isset($_GET['error'])){
                                if($_GET['error']=='1'){
                                    echo "<b>Error en usuario o contraseña.</b>";
                                    }
                                }
                        ?>
                    </center>
                    <!---------------------BOTON------------------------->
                    <div class="formulario__button">
                        <div class="formulario__button-mensaje">
                            <p>Porfavor llena todos los campos correctamente</p>
                            <i class="formulario__warning fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <button class="button-general" type="submit">Enviar</button>
                    </div>
                    
                    <br> 
                    <center>
                    <c> <a href = "http://google.com">¿Olvidaste la constraseña?</a></c>
                    <br>
                    <br>
                    <center>  
                    <b>Ingresar con</b>
                    <br>
                        <a href="#"><button class="button-icon-facebook" type="submit"><i class="fa-brands fa-facebook-f"></i></button></a>
                        <a href="#"><button class="button-icon-google" type="submit"><i class="fa-brands fa-google"></i></button></a>
                    <br>
                    <center>      
                    <a>¿No tienes cuenta? <a href = "RegistroUsuario.php">Reg&iacute;strate aqu&iacute;</a></a>
                    <br>
                </form>  
        </div>
              <?php
            } else {
              ?>
            <!----------------PERFIL USUARIO----------------------------->
            <!---------------------BOTON------------------------->
            <br>
            <center>
                <a href="cerrarSesion.php"><button class="button-general">Cerrar sesion</button></a>
            </center>
        <script src="js/formulario.js"></script>
        <?php
            }
        ?>
    </body>
</html>