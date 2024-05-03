<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tarjeta{
            align-items: center;
            text-align: center;
            background-color: black;
        }
        .imagenTarjeta{
            width 90%;
        }
    </style>
</head>
<body>

    <div class="targeta">
        <img class="imagenTarjeta" src="img/btn_nahuatl.png">

        <a href="#">Escuchar</a>
    </div>

    <button id="siguiente">Siguiente</button>

    <script>
        var lengua = "nahuatl"
        $(document).ready(function()){
            $('#siguiente').click(function()) {

                lengua = "tenek"
            }
        }
    </script>
</body>
</html>