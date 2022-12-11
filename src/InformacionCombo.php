<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informacion de combo</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/InformacionPelicula.css"/>
  </head>
  <body>
    <div class="container">
      <?php
      include('nav.html');
      include("Connect.php");
      $id = $_GET["id"];
      $query = "SELECT * FROM COMBO WHERE ID_COMBO = $id";
      $res = mysqli_query($conn, $query) or die("No se pudo ejecutar la consulta");
      $data = mysqli_fetch_assoc($res);
      ?>
      <section>
        <div id="section-main">
          <div id="section-main-detalles">
                <div id="section-main-detalles-informacion">
                <h1><?php echo $data['NOMBRE']; ?></h1>
                <p class="section-main-detalles-informacion-parrafos">
                <?php  echo $data['DESCRIPCION']; ?>
                </p>
                </div>
                <div  id="section-main-detalles-descripcion">
                <p>
                    <?php echo $data['PRECIO_VENTA']; ?>
                </p>
                </div>
                <button  class = "button-general">Añadir al carrito</button>
          </div>
          <img id="section-main-imagen" class="bordes"  src="data:image/jpg;base64,<?php echo base64_encode($data['IMAGEN']); ?>" alt="imagen de ejemplo"/>
        </div>
      </section>
      <a href="registroCombo.php"<?php echo $id ?>"><button  class="button-general">Modificar</button></a>
    </div>
  </body>
</html>
