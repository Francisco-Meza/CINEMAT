<!DOCTYPE html>
<html>
    <head>
        <title>Registrate</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php
                include("nav.php");
                include("Connect.php");
                if(isset($_SESSION["correo"]) && $_SESSION['id'] == 1){
                    include("navAdmin.html");
            }
            ?>
            <!-------------------------FORMULARIO--------------------------------------------------->
                <div class="formulario__h2">
                    <h2>Registro</h2>
                </div>
                <form enctype="multipart/form-data" class="formulario" action="RecibirUsuario.php" method="post" onsubmit="return validar();">
                    <!---------------------------NOMBRE-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="text" name="nombre" id="nombre" placeholder="Nombre del usuario">
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
                            <input class="formulario__input" type="text" name="apellidos" id="apellidos">
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
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="formulario__input"
                                value="1920-01-01"
                                min="1920-01-01" max="2020-12-31">
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
                    <!---------------------------CONTRASE??A-------------------------------------------------->
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
                    <!--------------------------- REPETIR CONTRASE??A-------------------------------------------------->
                    <div class="formulario__grupo" id="grupo__password">
                        <label for="password2" class="formulario__label">Repetir Contrase&ntilde;a</label>
                        <div class="formulario__grupo-input">
                            <input class="formulario__input" type="password" name="password2" id="password2">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>Ambas contrase&ntilde;a deben ser iguales</p>
                        </div>
                    </div>
                     <!-------------------------FOTO----------------------->
                     <div class="formulario__grupo"id="grupo__portada">
                        <label for="foto" class="formulario__label">Foto</label>
                        <div class="formulario__grupo-input">
                            <div class="file__botton" >
                                <input class="file__input-botton" type="file" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="formulario__button">
                        <div class="formulario__button-mensaje">
                            <p>Porfavor llena todos los campos correctamente</p>
                            <i class="formulario__warning fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <button class="button-general" type="submit">Enviar</button>
                    </div> -->

                    <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $query = "SELECT * FROM usuario WHERE ID_USUARIO = $id";
                            $res = mysqli_query($conn, $query);
                            $data = mysqli_fetch_assoc($res);
                    ?>
                <script>
                     document.getElementById('nombre').value = "<?php echo $data['NOMBRE']; ?>"
                     document.getElementById('apellidos').value = "<?php echo $data['APELLIDOS']; ?>"
                     document.getElementById('fecha_nacimiento').value = "<?php echo $data['FECHA_NACIMIENTO']; ?>"
                     document.getElementById('correo').value = "<?php echo $data['CORREO']; ?>"
                     //document.getElementById('password').value = "<?php// echo $data['PASSWOR']; ?>"

                </script>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <?php
            }
        ?>
                    <!----------------------------------------------------------------->
                    <div class="formulario__button">
                        <div class="formulario__button-mensaje">
                            <p>Porfavor llena todos los campos correctamente</p>
                            <i class="formulario__warning fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <button class="button-general"  type="submit">Enviar</button>
                    </div>

                </form>  
        </div>
        <script src="js/formulario.js"></script>
    </body>
</html>