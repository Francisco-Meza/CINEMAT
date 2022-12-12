<?php
include("Connect.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE ID_USUARIO = $id";
    $resul = mysqli_query($conn, $sql)or die("Query Failed! SQL - Error: ".mysqli_error($conectar));
    header("Location:usuarios.php");
}
?>