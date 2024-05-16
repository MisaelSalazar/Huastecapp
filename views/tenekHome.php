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
            $titulo = "Aprendamos Tének";
            include('../components/topAppMenu.php');
        ?>
    </header>


    <main>
        <?php
            $lengua = "Tenek";

            $linkIndicaciones ="tenek/indicaciones.php";
            $linkColores = "tenek/colores.php";
            $linkNumeros = "tenek/numeros.php";
            $linkPronombres = "tenek/pronombres.php";

            include('../components/menuLengua.php');
        ?>
    </main>


    <script src="../public/fontawesome-free-6.5.1-web/all.js"></script>
</body>

</html>