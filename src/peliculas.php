<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Peliculas</title>
</head>
<body>
    <?php
        include("nav.html");
        include("Connect.php");
        $query = "SELECT * FROM PELICULA";
        $res = mysqli_query($conn, $query) or die("No se pudo realizar la consulta");
    ?>
    <br>
            <nav>
                <ul>
                    <li><a href="RegistroCombo.php">Combos</a></li>
                    <li><a href="RegistroPelicula.php">Pel&iacute;culas</a></li>
                </ul>
            </nav>
            <br>
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>IDIOMA</th>
            <th>DURACION</th>
            <th>CLASIFICACION</th>
            <th>GENERO</th>
            <th>ACCION</th>
        </tr>
        <?php
                while($row = mysqli_fetch_assoc($res)){
            ?>
                <tr>
                <td>
                    <?php echo $row['NOMBRE']; ?>
                </td>
                <td>
                    <?php echo $row['ID_IDIOMA']; ?>
                </td>
                <td>
                    <?php echo $row['DURACION']; ?>
                </td>
                <td>
                    <?php echo $row['ID_CLASIFICACION']; ?>
                </td>
                <td>
                    <?php echo $row['ID_GENERERO']; ?>
                </td>
                <td>
                    <button class="button-general" id="<?php echo $row['ID_PELICULA']; ?>" onclick="VerInfo(this.id)">Editar</button>
                    <button class="button-general" id="<?php echo $row['ID_PELICULA']; ?>" onclick="Eliminar(this.id)">Eliminar</button>
                </td>
                </tr>
            </div>
            <?php
                }
            ?>
    </table>
    <br>
    <center>
        <button onclick="Nuevo()" class="button-general">Nuevo</button>
    </center>
    <script>
        function VerInfo(id){
            window.location.href = "RegistroPelicula.php?id="+id;
        }
        function Eliminar(id){
            var res = confirm("¿Seguro que desea eliminar?");
            if(res){
                window.location.href = "EliminarPelicula.php?id="+id;
            }
        }
        function Nuevo(id){
            window.location.href = "RegistroPelicula.php";
        }
    </script>
</body>
</html>