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
    <link rel="stylesheet" href="../../css/actividad.css">

</head>

<body>
    <header>
        <?php
            $iconoMenu = false;
            $titulo = "¡Repasemos lo aprendido!";
            $menuSuperior = false;
            
            include('../../components/topAppMenu.php');
        ?>
    </header>

    <center>
        <main>
            <h2>¿Cuál es la pronunciación correcta?</h2>

            <img id="colorImage" src="" alt="Color">
            <div class="buttons">
                <button id="btn1" onclick="checkAnswer(this)"></button>
                <button id="btn2" onclick="checkAnswer(this)"></button>
                <button id="btn3" onclick="checkAnswer(this)"></button>
            </div>
            <button id="btnReiniciar" onclick="iniciarJuego()">Reiniciar</button>

        </main>
    </center>


    <script src="../../scripts/actividad.js"></script>

    <script src="../../public/fontawesome-free-6.5.1-web/all.js"></script>
    <script src="../../scripts/topAppMenu.js"></script>

</body>

</html>