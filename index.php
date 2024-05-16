<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <center>
        <div class="container">
            <h2>Iniciar Sesión</h2>
            <!-- Formulario de inicio de sesión -->
            <form id="loginForm">
                <div class="input-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div><br><br><br>
                <a id="iniciar" href="views/home.php">Iniciar Sesión</a><br><br>
            </form>
        </div>
    </center>

    
</body>

</html>