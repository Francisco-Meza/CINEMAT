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
                <h2>Registro</h2>
                <form  action="" onsubmit="return validar();">
                    <label for="" >Nombre</label>
                    <br>
                    <input type="text" name="nombre" id="nombre" pattern="Nombre de la pelicula">
                    <br>
                    <label for="">Apellidos</label>
                    <br>
                    <input type="text" name="apellido" id="apellido" pattern="apellido">
                    <br>
                    <label for="">Fecha de nacimiento</label> 
                    <br>
                    <input type="text" name="Fecha_Nac" id="fecha_Nac" pattern="Fecha_Nac">
                    <br>
                    <label for="">Email</label>
                    <br>
                    <input type="text" name="Correo" id="correo" pattern="correo">
                    <br>
                    <label for="">Contrase&ntilde;a</label> 
                    <br>
                    <input type="password" name="contrasenia" id="contrasenia" pattern="contrasenia">
                    <br>
                    <label for="">Forma de pago</label>
                    <br>
                    <input type="text" name="pago" id="pago" pattern="Forma de pago">
                    <br>
                    <label for="">Codig&oacute;</label>
                    <br>
                    <input type="text" name="codigo" id="codigo" pattern="codigo">
                    <br>
                    <center>
                        <br>
                        <button class="button-general" type="submit">Enviar</button>
                    </center>
                </form>  
        </div>
        <Script>
            function validar(){
                nombreInput = document.getElementById("nombre");
                nombre = nombreInput.value;
                if(nombre.length >10){
                    nombreInput.value = 'Debe tener menos de 10 caracteres'
                    nombreInput.focus();
                    return false
                }
                document.form.submit();
            }
        </Script>
    </body>
</html>