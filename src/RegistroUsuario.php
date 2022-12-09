<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registrate</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php
                include("nav.html");
                include("Connect.php");
            ?>
            <!-------------------------FORMULARIO--------------------------------------------------->
                <div class="formulario__h2">
                    <h2>Registro</h2>
                </div>
                <form class="formulario" action="" onsubmit="return validar()">
                    <!---------------------------NOMBRE-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="nombre" id="nombre">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                    <!---------------------------APELLIDO-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__apellido">
                        <label for="apellido" class="formulario__label">Apellidos</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="apellido" id="apellido">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El apellido solo debe contener letras</p>
                        </div>
                    </div>
                    <!---------------------------FECHA DE NACIMIENTO-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__fecha_Nac">
                        <label for="fecha_Nac" class="formulario__label">Fecha de nacimiento</label>
                        <div class="formulario__grupo-input">
                            <input type="date" id="fecha_Nac" name="fecha_Nac" class="formulario__input"
                                value="2018-07-22"
                                min="2018-01-01" max="2018-12-31">
                        </div>
                        <div class="formulario__grupo-error">
                            <p>Tienes que ser un adulto</p>
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
                    <!--------------------------- REPETIR CONTRASEÑA-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__password2">
                        <label for="password2" class="formulario__label">Repetir Contrase&ntilde;a</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="password" name="password2" id="password2">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>Ambas contrase&ntilde;a deben ser iguales</p>
                        </div>
                    </div>
                    <!--
                    <label for="pago" class="formulario__label">Forma de pago</label>
                    <input class="formulario__input" type="text" name="pago" id="pago" pattern="Forma de pago">
                    <label for="codigo" class="formulario__label">Codig&oacute;</label>
                    <input class="formulario__input" type="text" name="codigo" id="codigo" pattern="codigo">-->
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