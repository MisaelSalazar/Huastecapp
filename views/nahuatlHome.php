<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../public/fontawesome-free-6.5.1-web/all.css">

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
            $titulo = "Aprendamos Nahuatl";
            include('../components/topAppMenu.php');
        ?>
    </header>

    <main>
        <?php
            $lengua = "Nahuatl";

            $linkIndicaciones ="nahuatl/indicaciones.php";
            $linkColores = "nahuatl/colores.php";
            $linkNumeros = "nahuatl/numeros.php";
            $linkPronombres = "nahuatl/pronombres.php";

            include('../components/menuLengua.php');
        ?>
    </main>


    <script src="../public/fontawesome-free-6.5.1-web/all.js"></script>
    
</body>

</html>