<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registro de una pelicula</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body> 
        
        <div class="container">
            <?php
                include("nav.html");
                include("Connect.php");
            ?>
                <form enctype="multipart/form-data" class="formulario" action="recibirPelicula.php" method="post">
                    <dic class="formulario__h2"> 
                        <h2>Registro de pelicula</h2>
                    </dic>
                    <!-------------------------NOMBRE----------------------->
                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre de la pelicula">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                    <!-------------------------IDIOMA----------------------->
                    <div class="formulario__grupo" id="grupo__idioma">
                        <label for="nombre" class="formulario__label">Idioma</label>
                        <div class="formulario__grupo-input">
                           <!--<input type="text" class="formulario__input" name="idioma" id="idioma" placeholder="Idioma de la pelicula">--> 
                            <select class="formulario__input" name="idioma" id="idioma">
                                <?php
                                $consulta = "SELECT * FROM idioma";
                                $ejecutar = mysqli_query($conn, $consulta)
                                    or die("no se pudo leer los idiomas");
                                foreach($ejecutar as $opciones){
                                    echo "<option value='".$opciones['id']."'>".$opciones['nombre']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-------------------------DURACIÓN----------------------->
                    <div class="formulario__grupo" id="grupo__duracion">
                        <label for="nombre" class="formulario__label">Duraci&oacute;n</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="duracion" id="duracion" placeholder="Duración de la pelicula">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>La duraci&oacute;n solo debe contener n&uacute;mero</p>
                        </div>
                    </div>
                    <!-------------------------CLASIFICACIÓN----------------------->
                    <div class="formulario__grupo" id="grupo__clasificacion">
                        <label for="nombre" class="formulario__label">Clasificaci&oacute;n</label>
                        <div class="formulario__grupo-input">
                           <!--<input type="text" class="formulario__input" name="clasificacion" id="clasificacion" placeholder="Clasificación de la pelicula">--> 
                            <select class="formulario__input" name="clasificacion" id="clasificacion">
                                <?php
                                $consulta = "SELECT * FROM clasificacion";
                                $ejecutar = mysqli_query($conn, $consulta)
                                    or die("no se pudo leer las clasificaciones");
                                foreach($ejecutar as $opciones){
                                    echo "<option value='".$opciones['id']."'>".$opciones['nombre']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-------------------------GENERO----------------------->
                    <div class="formulario__grupo" id="grupo__genero">
                        <label for="nombre" class="formulario__label">Gen&eacute;ro</label>
                        <div class="formulario__grupo-input">
                            <!--<input type="text" class="formulario__input" name="genero" id="genero" placeholder="Género de la pelicula">-->
                            <select class="formulario__input" name="genero" id="genero">
                                <?php
                                $consulta = "SELECT * FROM genero";
                                $ejecutar = mysqli_query($conn, $consulta)
                                    or die("no se pudo leer los generos");
                                foreach($ejecutar as $opciones){
                                    echo "<option value='".$opciones['id']."'>".$opciones['nombre']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-------------------------INFORMACIÓN----------------------->
                    <div class="formulario__grupo" id="grupo__informacion">
                        <label for="informacion" class="formulario__label">Informaci&oacute;n </label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="informacion" id="informacion" placeholder="Información de la pelicula">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>la Informaci&oacute;n  solo debe contener letras</p>
                        </div>
                    </div>
                    <!-------------------------PORTADA----------------------->
                    <div class="formulario__grupo"id="grupo__portada">
                        <label for="foto" class="formulario__label">Portada</label>
                        <div class="formulario__grupo-input">
                            <div class="file__botton" >
                                <input class="file__input-botton" type="file" name="foto" id="portada">
                            </div>
                        </div>
                    </div>
                    <!-------------------------------ID-->
                    <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $query = "SELECT * FROM PELICULA WHERE ID_PELICULA = $id";
                $res = mysqli_query($conn, $query);
                $data = mysqli_fetch_assoc($res);
                ?>
                <script>
                     document.getElementById('nombre').value = "<?php echo $data['NOMBRE']; ?>"
                     document.getElementById('idioma').value = "<?php echo $data['ID_IDIOMA']; ?>"
                     document.getElementById('duracion').value = "<?php echo $data['DURACION']; ?>"
                     document.getElementById('clasificacion').value = "<?php echo $data['ID_CLASIFICACION']; ?>"
                     document.getElementById('genero').value = "<?php echo $data['ID_GENERERO']; ?>"
                     document.getElementById('informacion').value = "<?php echo $data['INFORMACION']; ?>"
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
        <Script src="js/formulario.js"></Script>
    </body>
</html>