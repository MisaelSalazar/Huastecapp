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
            $titulo = "Inicio";
            include('../components/topAppMenu.php');
        ?>

    </header>

    <main>
        <center>
            <section>
                <img id="mapa" src="../img/OIP.jpeg">
            </section>

            <section>
                <button id="nahuatl">Nahuatl</button>
                <button id="tenek">Tenek</button>
                <button id="pame">Xi'oi</button>
            </section>
            <section>
                <img id="ImagenNiños" src="../img/personajes_principal.png">
            </section>
        </center>

    </main>

    <footer>
    </footer>


    <script src="../public/fontawesome-free-6.5.1-web/all.js"></script>
</body>

</html>