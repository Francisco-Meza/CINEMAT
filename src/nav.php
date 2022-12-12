<script src="https://kit.fontawesome.com/24ebd39237.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
<nav>
    <h1>CINEMAT</h1>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="comboPrueba.php">Combos</a></li>
        <li><a href="Sugerencias.php">Sugerencias</a></li>
        <li><a href="AcercaDe.php">Acerca de</a></li>

        <?php
        session_start();
        if(isset($_SESSION['id']) && $_SESSION['id'] = 1) {?>
         <li><a href="peliculas.php">Administraci&oacute;n</a></li>
         <li><a href="cerrarSesion.php">Cerrar sesi&oacute;n</a></li>
        <?php }?>

       

    </ul>
    <a class="buscar">
        <input type="text" placeholder="Buscar" required>
        <!-- <div class="btn"> -->
            <i class="fas fa-search icon"></i>
        <!-- </div> -->
    </a>
        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="login.php"><i class="fa-solid fa-circle-user"></i></a>
</nav>
