<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../public/fontawesome-free-6.5.1-web/all.css">

    <link rel="stylesheet" href="../css/bottomNavBar.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/topAppMenu.css">
    <link rel="stylesheet" href="../css/img.css">
    <link rel="stylesheet" href="../css/buttons.css">
</head>

<body>

    <header>

        <?php
            $iconoMenu = true;
            $titulo = "Indicaciones en lengua Nahuatl";
            $menuSuperior = true;
            $titulo = "Huastek App";
            include('../components/topAppMenu.php');
        ?>

    </header>

    <main>
        <center>

            <img id="mapaImagen" src="../img/Mapa_SLP.png">

            <a href="nahuatlHome.php">
                <div id="nahuatl">

                </div>
            </a>
            <a href="tenekHome.php">
                <div id="tenek"></div>
            </a>
            <a href="pameHome.php">
                <div id="pame"></div>
            </a>

            <section id="contenedorImagenNiños">
                <img id="ImagenNiños" src="../img/personajes_principal.png">
            </section>
        </center>

    </main>

    <footer>
    </footer>


    <script src="../public/fontawesome-free-6.5.1-web/all.js"></script>
</body>

</html>