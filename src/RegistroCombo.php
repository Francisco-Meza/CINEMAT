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
                
            ?>
                <br>
                <nav>
                    <ul>
                        <li><a href="RegistroCombo.php">Registro Combo</a></li>
                        <li><a href="RegistroPelicula.php">Registro Pel&iacute;cula</a></li>
                    </ul>
                </nav>
                <br>
                <form id="formulario" action="" onsubmit="return validar();">
                    <label for="" >Nombre</label>
                    <br>
                    <input type="text" name="nombre" id="nombre" pattern="Nombre de la pelicula">
                    <br>
                    <label for="">Detalles</label>
                    <br>
                    <textarea  name="detalles" id="Detalles" pattern="Detalles "></textarea>
                    <br>
                    <label for="">Precio</label>
                    <br>
                    <input type="text" name="precio" id="precio" pattern="Precio">
                    <br>
                    <center>
                        <button class="button-general" type="submit">Enviar</button>
                    </center>   
                </form>  
        </div>
        <script src="js/formulario.js"></script>
    </body>
</html>