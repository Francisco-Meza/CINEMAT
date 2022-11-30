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
            ?>
                <div class="formulario__h2">
                    <h2>Registro</h2>
                </div>
                <form class="formulario" action="" onsubmit="return validar()">
                    <!---------------------------NOMBRE-------------------------------------------------->
                    <div class="formulario__grupo">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="nombre" id="nombre">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error" id="formulario__grupo-error-nombre">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                    <!---------------------------APELLIDO-------------------------------------------------->
                    <div class="formulario__grupo">
                        <label for="apellido" class="formulario__label">Apellidos</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="apellido" id="apellido" pattern="apellido">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El apellido solo debe contener letras</p>
                        </div>
                    </div>
                    <!---------------------------FECHA DE NACIMIENTO-------------------------------------------------->
                    <div class="formulario__grupo">
                        <label for="fecha_Nac" class="formulario__label">Fecha de nacimiento</label>
                        <div class="formulario__grupo-input">
                            <input type="date" id="fecha_Nac" name="trip-start" class="formulario__input"
                                value="2018-07-22"
                                min="2018-01-01" max="2018-12-31">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>Tienes que ser un adulto</p>
                        </div>
                    </div>
                     <!---------------------------CORREO-------------------------------------------------->
                    <div class="formulario__grupo">
                        <label for="correo" class="formulario__label">Correo electronico</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="correo" id="correo" pattern="correo">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El correo debe tener un formato correcto</p>
                        </div>
                    </div>
                    <!---------------------------CONTRASEÑA-------------------------------------------------->
                    <div class="formulario__grupo">
                        <label for="password" class="formulario__label">Contrase&ntilde;a</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="password" name="password" id="password" pattern="password">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>La contrase&ntilde;a debe contener al menos una mayuscula, minuscula y un numero</p>
                        </div>
                    </div>
                    <!--------------------------- REPETIR CONTRASEÑA-------------------------------------------------->
                    <div class="formulario__grupo">
                        <label for="password2" class="formulario__label">Repetir Contrase&ntilde;a</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="password" name="password2" id="password2" pattern="password">
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
                        <button class="button-general" type="submit">Enviar</button>
                    </div>
                </form>  
        </div>
        <script>
            function validar(){
                nombre = document.getElementById("nombre").value;
                apellido = document.getElementById("apellido").value;
                fechaNacimiento = document.getElementById("fecha_Nac").value;
                password = document.getElementById("password").value;
                password2 = document.getElementById("password2").value;
                if(nombre == ""){
                    document.getElementById("formulario__grupo-error-nombre").classList.remove("formulario__grupo-error");
                    document.getElementById("formulario__grupo-error-nombre").classList.add("formulario__grupo-error-activado");
                    return false;
                }
            }
        </script>
    </body>
</html>