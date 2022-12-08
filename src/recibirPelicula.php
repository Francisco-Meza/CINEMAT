<!DOCTYPE html>
<html>
<head>
  <title>Hello!</title>
</head>
<body>
    <?php

        $nombre = $_POST['nombre'] ;
        $duracion = $_POST['duracion'] ;
        $informacion = $_POST['informacion'] ;
        $clasificacion = $_POST['clasificacion'] ;
        $genero = $_POST['genero'] ;
        $formato = $_POST['formato'] ;
        $idioma = $_POST['idioma'] ;
        $portada = $_POST['portada'] ;
        require("Connect.php");

$connexion = mysqli_connect($servername, $username, $password, $database);

if( mysqli_connect_errno())
  {

      echo "Hubo un problema con la base de datos error al conectar";

      exit() ;
  }

  mysqli_select_db($connexion,$database) or die ("No se encuentra la Base de 
 datos");

  mysqli_set_charset($connexion,"cinemat");

    $instruccion_SQL = "INSERT INTO peliculas (nombre,idioma,duracion,clasificacion,genero,formato,portada,informacion)
     VALUES ('$nombre','$idioma','$duracion',$clasificacion,'$genero','$formato','$portada','$informacion')";

   $resultado = mysqli_query($connexion,$instruccion_SQL);

   if($resultado == FALSE)
   {
       echo "error en la consulta";
   }  else
   {
        echo "Registro guardado<br><br>";
        echo "<table><tr><td>nombre:$nombre</td></tr>";
        echo "<tr><td>idioma:$idioma</td></tr>" ;
        echo "<tr><td>duracion:$duracion</td></tr>" ;
        echo "<tr><td>clasificacion:$clasificacion</td></tr>" ;
        echo "<tr><td>genero:$genero</td></tr>" ;
        echo "<tr><td>formato:$formato</td></tr>" ;
        echo "<tr><td>portada:$portada</td> </tr>";
        echo "<tr><td>informacion:$informacion</td> </tr></table>" ;
   }
            mysqli_close($connexion);
?>
</body>