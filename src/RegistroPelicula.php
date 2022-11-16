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
            ?>
            <h2>Registro de la pelicula</h2>
            <form class="form" >
               Nombre:<input type="nombre" placeholder="Escribe"/>
               <br>
               <br>
               Informaci&oacute;n:<input type="info" placeholder="Escribe" />
                <br>
                <br>
                G&eacute;nero:<input type="genero" placeholder="Escribe" /> 
                <br>
                <br>
                Duraci&oacute;n:<input type="duracion" placeholder="Escribe" /> 
                <br>
                <br>
                <button type="submit">Enviar</button>
              </form>
        </div>
    </body>
</html>