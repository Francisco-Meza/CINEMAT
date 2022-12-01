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
            ?>
            <div class="formulario__h2">
                    <h2>Login</h2>
                </div>
                <br>
                <form id="formulario" action="" onsubmit="return validar();">
                <!-------------------------NOMBRE----------------------->
                   <div class="formulario__grupo">
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
                    <!------
                    <center>
                        <button class="button-general" type="submit">Aceptar</button>
                    </center>
                    <br>
                    <center>
                    <c> <a href = "http://google.com">¿Olvidaste la constraseña?</a></c>
                    <br>
                    <br>
                    <center>   -->
                    <b>Ingresar con</b>
                    <br>
                    <br>
                    <!-- <center>      -->
                    <a>¿No tienes cuenta? <a href = "RegistroUsuario.php">Reg&iacute;strate aqu&iacute;</a></a>
                    <br>
                </form>  
        </div>
        <script src="js/formulario.js"></script>
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