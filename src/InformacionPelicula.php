<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informacion de la pelicula</title>
    <link rel="stylesheet" href="css/InformacionPelicula.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <?php
      include('nav.php');
      include("Connect.php");
      $id = $_GET["id"];
      $query = "SELECT ID_PELICULA, pelicula.NOMBRE, DURACION, clasificacion.nombre as clasificacion,genero.nombre as genero, idioma.nombre as idioma, PORTADA, INFORMACION FROM `pelicula`, clasificacion, idioma, genero where ID_CLASIFICACION = clasificacion.id and ID_IDIOMA = idioma.id and ID_GENERERO = genero.id and ID_PELICULA = $id";
      $res = mysqli_query($conn, $query) or die("No se pudo ejecutar la consulta");
      $data = mysqli_fetch_assoc($res);
      ?>
      <section>
        <div id="section-main">
          <div id="section-main-detalles">
            <div id="section-main-detalles-informacion">
              <h1><?php echo $data['NOMBRE']; ?></h1>
              <div class="detalles-pelicula">
                <div id="det-clasificacion"><?php echo $data['clasificacion']; ?></div>
                <div id="det-duracion"><?php echo $data['DURACION']; ?> Hrs</div>
                <div id="det-genero"><?php echo $data['genero']; ?></div>
                <div id="det-idioma"><?php echo $data['idioma']; ?></div>
              </div>
              <p class="section-main-detalles-informacion-parrafos">
                Dia <span>Dia tal</span>
              </p>
              <p class="section-main-detalles-informacion-parrafos">
                Hora <span>Hora tal</span>
              </p>
            </div>
            <div id="section-main-detalles-descripcion">
              <p>
                <?php echo $data['INFORMACION']; ?>
              </p>
            </div>
            <button class = "button-general carro">Añadir al carrito</button>
          </div>
          <img id="section-main-imagen" src="data:image/jpg;base64,<?php echo base64_encode($data['PORTADA']); ?>" alt="Portada de ejemplo"/>
        </div>
      </section>
    </div>
  </body>
</html>
