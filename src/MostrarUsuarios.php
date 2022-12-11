<!DOCTYPE html>
<html lang="en">
<head>
    <title>USUARIOS REGISTRADOS</title>
</head>
<body>
    <div class="container">
        <?php 
            include ("nav.php");
            include ("formulario.js");
            include ("style.css");
        ?>
                    <tr>
                        <td>
                            <div class="contenido">
                                Organigrama
                                <br>
                                Buscar:
                                <form action="organigrama.php" method="POST">
                                    <input type="text" id="buscar" name="buscar" value="">
                                    <input type="submit" id="enviar" name="enviar" value="Enviar">
                                </form>
                                <br>

                                <table class="tabla" border='1px'>
                                    <tr>
                                        <td>No.</td>
                                        <td>ID Persona</td>
                                        <td>Nombre</td>
                                        <td>Puesto</td>
                                        <td>Correo</td>
                                        <td>Tel&eacute;fono</td>
                                        <td>Foto</td>
                                        <?php if(isset($_SESSION["usuario"])) {?>
                                        <td>Editar</td>
                                        <?php }?>
                                        

                                    </tr>
                                    <?php
                                        include('connect.php');
                                        //$consulta="select 
                                        //pe.id_Personal, pu.id_puesto, pu.nombre nombrepuesto, pe.nombre, pe.telefono, pe.correo, pe.foto
                                        //from personal pe, puesto pu 
                                        //where pe.id_puesto=pu.id_puesto";
                                        $resultado=mysqli_query($conn, $consulta)
                                                    or die('Error al consultar personal');
                                        $i=1;
                                        while($fila=mysqli_fetch_array($resultado)){
                                            echo '<tr>';
                                            echo '<td>' . $i . '</td>';
                                            echo '<td>' . $fila['id_Personal'] . '</td>';
                                            echo '<td>' . $fila['nombre']. '</td>';
                                            echo '<td>' . $fila['id_puesto']. '-'. $fila['nombrepuesto']. '</td>';
                                            echo '<td>' . $fila['correo']. '</td>';
                                            echo '<td>' . $fila['telefono']. '</td>';
                                            echo '<td>' . "<img src='mostrarFoto.php?id_Personal=". $fila["id_Personal"] ."' width='70px'> " . "</td>";
                                            echo '<td>' . 'EDITAR'. '</td>';
                                            // -------------DEBEMOS CONDICIONAR PARA QUE NO EDITE EL USUARIO----------------
                                            if(isset($_SESSION["usuario"])){
                                                echo "<td>" . "
                                                <a href='editarPersonal.php?id_Personal=".$fila["id_Personal"]. "'>
                                                <img src = 'img/editar.png' width='30px'> 
                                                </a>
                                                <a href='directorio_eliminar.php?id_Personal=".$fila["id_Personal"]. "'>
                                                <img src = 'img/eliminar.png' width='30px'> 
                                                </a>
                                                " ."</td>";
                                            }
                                            echo '</tr>';
                                            $i++;
                                        }
                                    ?>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>