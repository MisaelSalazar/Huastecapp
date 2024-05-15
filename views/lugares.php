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
            $menuSuperior = true;
            $titulo = "Lugares Turisticos De La Huasteca";
            include('../components/topAppMenu.php');
        ?>
    </header>

    <main>
        <center>
            <iframe id="mapa"
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d945850.0448407818!2d-99.47382766186313!3d22.174471522748576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slugares%20turisticos%20huasteca%20potosina!5e0!3m2!1ses-419!2smx!4v1713913744879!5m2!1ses-419!2smx"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </center>
    </main>


    <script src="../public/fontawesome-free-6.5.1-web/all.js"></script>
</body>

</html>