
<!-- Barra de navegación superior -->
<div id="top-bar">
    <!-- Botón del menú hamburguesa -->
    <div id="menu-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
    <!-- Titulo de la Barra -->
    <center>
        <?php 
            
            echo $titulo
        ?>
    </center>
</div>

<!-- Contenedor del menú desplegable -->
<div id="menu-container">
    <!-- Elementos del menú -->
    <a href="../views/home.php" class="menu-item">
        <i class="fa-solid fa-house"></i> 
        Inicio
    </a><br>
    <a href="../views/consejos.php" class="menu-item">
        <i class="fa-solid fa-lightbulb"></i> 
        Consejos
    </a><br>
    <a href="../views/lugares.php" class="menu-item">
        <i class="fa-solid fa-map-location-dot"></i> 
        Lugares de la Huasteca
    </a><br>
    <a href="../views/acercaDe.php" class="menu-item">
        <i class="fa-solid fa-circle-question"></i> 
        Acerca de
    </a><br>
</div>

<script src="../scripts/topAppMenu.js"></script>