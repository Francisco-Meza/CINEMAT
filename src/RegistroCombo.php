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
                include("Connect.php");
                // session_start();
                // if(!isset($_SESSION["correo"])){
                //     header("Location: login.php");
                // }
            ?>
                <br>
                <nav>
                    <ul>
                        <li><a href="RegistroCombo.php">Registro Combo</a></li>
                        <li><a href="RegistroPelicula.php">Registro Pel&iacute;cula</a></li>
                    </ul>
                </nav>
                <br>
                <form enctype="multipart/form-data" class="formulario" action="RecibirCombo.php" method="post">
                <!-------------------------NOMBRE----------------------->
                <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre del combo">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El nombre solo debe contener letras</p>
                        </div>
                    </div>
                    <!-------------------------DESCRIPCION----------------------->
                    <div class="formulario__grupo" id="grupo__detalles">
                        <label for="descripcion" class="formulario__label">Descripci&oacute;n</label>
                        <div class="formulario__grupo-input">
                            <textarea type="text" class="formulario__textarea" name="descripcion" id="descripcion" placeholder="Detalles del combo"></textarea>
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>Los descripcion del combo solo debe contener letras</p>
                        </div>
                    </div>
                    
                    <!-------------------------PRECIO----------------------->
                    <div class="formulario__grupo" id="grupo__precio">
                        <label for="nombre" class="formulario__label">Precio</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="precio" id="precio" placeholder="Precio del combo">
                            <i class="formulario__error fa-sharp fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="formulario__grupo-error">
                            <p>El precio solo debe contener números</p>
                        </div>
                    </div>
                    <!-------------------------IMAGEN----------------------->
                    <div class="formulario__grupo" id="grupo__imagen">
                        <label for="imagen" class="formulario__label">Imagen</label>
                        <div class="formulario__grupo-input">
                            <div class="file__botton" >
                                <input type="file" name="imagen" id="imagen" placebolder="Imagen">
                            </div>
                        </div>
                    </div>
                    <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $query = "SELECT * FROM combo WHERE ID_COMBO = $id";
                $res = mysqli_query($conn, $query);
                $data = mysqli_fetch_assoc($res);
                ?>
                <script>
                     document.getElementById('nombre').value = "<?php echo $data['NOMBRE']; ?>"
                     document.getElementById('descripcion').value = "<?php echo $data['DESCRIPCION']; ?>"
                     document.getElementById('precio').value = "<?php echo $data['PRECIO_VENTA']; ?>"
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
                        <button class="button-general" type="submit">Enviar</button>
                    </div>
                </form>  
        </div>
        <script src="js/formulario.js"></script>
    </body>
</html>