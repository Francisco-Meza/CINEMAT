<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Películas</title>
</head>
<body>
    <?php
        include("nav.php");
        include("Connect.php");
        if(!isset($_SESSION["correo"])){
            header("Location: login.php");
    }
        $query = "SELECT ID_PELICULA, pelicula.NOMBRE, DURACION, clasificacion.nombre as clasificacion,genero.nombre as genero, idioma.nombre as idioma FROM `pelicula`, clasificacion, idioma, genero where ID_CLASIFICACION = clasificacion.id and ID_IDIOMA = idioma.id and ID_GENERERO = genero.id order by NOMBRE";
        $res = mysqli_query($conn, $query) or die("No se pudo realizar la consulta");
        include("navAdmin.html")
    ?>
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>IDIOMA</th>
            <th>DURACIÓN</th>
            <th>CLASIFICACIÓN</th>
            <th>GÉNERO</th>
            <th>ACCIÓN</th>
        </tr>
        <?php
                while($row = mysqli_fetch_assoc($res)){
            ?>
                <tr>
                <td>
                    <?php echo $row['NOMBRE']; ?>
                </td>
                <td>
                    <?php echo $row['idioma']; ?>
                </td>
                <td>
                    <?php echo $row['DURACION']; ?>
                </td>
                <td>
                    <?php echo $row['clasificacion']; ?>
                </td>
                <td>
                    <?php echo $row['genero']; ?>
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