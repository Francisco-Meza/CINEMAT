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
        <script>
            const inputs = document.querySelectorAll('.formulario input');
            const resultadoArray = [];
            const expresiones = {
                usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
                nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
                password: /^.{4,12}$/, // 4 a 12 digitos.
                correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                telefono: /^\d{7,14}$/, // 7 a 14 numeros.
                numero: /^([0-9\:])*$/
            }
            function validar(){
                for (let i = 0; i < inputs.length; i++) {
                    resultado = false;
                    password = "";
                    switch(inputs[i].name){
                        case "nombre":
                            resultado = (expresiones.nombre.test(inputs[i].value))? true: false;
                        break;
                        case "apellido":
                            resultado = (expresiones.nombre.test(inputs[i].value))? true: false;
                        break;
                        case "fecha_Nac":
                            resultado = true;
                        break;
                        case "correo":
                            resultado = (expresiones.correo.test(inputs[i].value))? true: false;
                        break;
                        case "password":
                            resultado = (expresiones.password.test(inputs[i].value))? true: false;
                            password = inputs[i].value;
                        break;
                        case "password2":
                            resultado = (password == inputs[i].value && password!="")? true: false;
                        break;
                        default: resultado = true;
                        break;
                    }
                    if (resultadoArray[i] == null) {
                        if(!resultado){
                            document.getElementById(`grupo__${inputs[i].name}`).classList.add('formulario__grupo-incorrecto');
                            document.querySelector(`#grupo__${inputs[i].name} i`).classList.replace('formulario__error', 'formulario__error-activado');
                            document.querySelector(`#grupo__${inputs[i].name} .formulario__grupo-error`).classList.replace('formulario__grupo-error','formulario__grupo-error-activado');
                        }
                    }else if(resultadoArray[i] != resultado){
                        document.getElementById(`grupo__${inputs[i].name}`).classList.remove('formulario__grupo-incorrecto');
                        document.querySelector(`#grupo__${inputs[i].name} i`).classList.replace('formulario__error-activado', 'formulario__error');
                        document.querySelector(`#grupo__${inputs[i].name} .formulario__grupo-error-activado`).classList.replace('formulario__grupo-error-activado', 'formulario__grupo-error');
                    }
                    resultadoArray.push(resultado);
                }
                return false;
            }
        </script>
    </body>
</html>