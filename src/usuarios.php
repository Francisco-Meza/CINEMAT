<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Usuarios</title>
</head>

<body>
    <?php
    include("nav.php");
    include("Connect.php");
    if (!isset($_SESSION["correo"]) || $_SESSION['id'] != 1) {
        header("Location: login.php");
    }
    $query = "SELECT ID_USUARIO, NOMBRE, APELLIDOS, FECHA_NACIMIENTO, CORREO, PASSWOR, FOTO FROM usuario WHERE ID_USUARIO=ID_USUARIO order by NOMBRE";
    $res = mysqli_query($conn, $query) or die("No se pudo realizar la consulta");
    include("navAdmin.html");
    ?>
    <center>
        <h2>Usuarios</h2>
    </center>
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>FECHA NACIMIENTO</th>
            <th>CORREO</th>
            <th>ACCIÓN</th>
            <!-- <th>CONTRASEÑA</th> -->
            <!-- <th>FOTO</th> -->
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
        <tr>
            <td>
                <?php echo $row['NOMBRE']; ?>
            </td>
            <td>
                <?php echo $row['APELLIDOS']; ?>
            </td>
            <td>
                <?php echo $row['FECHA_NACIMIENTO']; ?>
            </td>
            <td>
                <?php echo $row['CORREO']; ?>
            </td>
            <!-- <td>
                    <?php echo $row['PASSWOR']; ?>
                </td> -->
            <!-- <td>
                    <?php echo $row['FOTO']; ?>
                </td> -->
            <td>
                <button class="button-general" id="<?php echo $row['ID_USUARIO']; ?>"
                    onclick="VerInfo(this.id)">Editar</button>
                <button class="button-general" id="<?php echo $row['ID_USUARIO']; ?>"
                    onclick="Eliminar(this.id)">Eliminar</button>
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
        function VerInfo(id) {
            window.location.href = "RegistroUsuario.php?id=" + id;
        }
        function Eliminar(id) {
            var res = confirm("¿Seguro que desea eliminar?");
            if (res) {
                window.location.href = "EliminarUsuario.php?id=" + id;
            }
        }
        function Nuevo(id) {
            window.location.href = "RegistroUsuario.php";
        }
    </script>
</body>

</html>