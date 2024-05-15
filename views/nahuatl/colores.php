<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../public/fontawesome-free-6.5.1-web/all.css">

    <link rel="stylesheet" href="../../css/carrusel.css">
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="stylesheet" href="../../css/topAppMenu.css">
    <link rel="stylesheet" href="../../css/img.css">
    <link rel="stylesheet" href="../../css/buttons.css">
</head>

<body>
    <header>
        <?php
            $iconoMenu = false;
            $titulo = "Colores En Lengua Nahuatl";
            $menuSuperior = false;
            
            include('../../components/topAppMenu.php');
        ?>
    </header>
    <main>
        <?php
            
            $primeraImagen = "../../img/coloresNahuatl/amarillo.png";

            include('../../components/carrusel.php');
        ?>
    </main>

    <script>
        var carpetaImagenes = "coloresNahuatl";
    </script>

    <script src="../../scripts/carrusel.js"></script>
    <script src="../../public/fontawesome-free-6.5.1-web/all.js"></script>
    <script src="../../scripts/topAppMenu.js"></script>
    <script src="../../scripts/rutasImagenes.js"></script>
    <script src="../../scripts/carrusel.js"></script>
</body>

</html>