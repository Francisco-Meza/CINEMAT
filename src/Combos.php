<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Combos</title>
</head>
<body>
    <?php
        include("nav.html");
        include("Connect.php");
        $query = "SELECT ID_COMBO, NOMBRE, DESCRIPCION,PRECIO_VENTA FROM combo WHERE ID_COMBO=ID_COMBO order by NOMBRE";
        $res = mysqli_query($conn, $query) or die("No se pudo realizar la consulta");
    ?>
            <nav>
                <ul>
                    <li><a href="Combos.php">Combos</a></li>
                    <li><a href="RegistroPelicula.php">Pel&iacute;culas</a></li>
                    <li><a href="usuarios.php">Usuarios</a></li>
                </ul>
            </nav>
            <center>
            <h2>Combos</h2>
            </center>
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>DETALLES</th>
            <th>PRECIO</th>
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
                    <?php echo $row['DESCRIPCION']; ?>
                </td>
                <td>
                    <?php echo $row['PRECIO_VENTA']; ?>
                </td>
                <td>
                    <button class="button-general" id="<?php echo $row['ID_COMBO']; ?>" onclick="VerInfo(this.id)">Editar</button>
                    <button class="button-general" id="<?php echo $row['ID_COMBO']; ?>" onclick="Eliminar(this.id)">Eliminar</button>
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
            window.location.href = "RegistroCombo.php?id="+id;
        }
        function Eliminar(id){
            var res = confirm("¿Seguro que desea eliminar?");
            if(res){
                window.location.href = "EliminarCombo.php?id="+id;
            }
        }
        function Nuevo(id){
            window.location.href = "RegistroCombo.php";
        }
    </script>
</body>
</html>