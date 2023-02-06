<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="validacion.js"></script>
</head>

<body>
    <div class="container">
        <form name="formulario" action="" class="login" onsubmit="return validarForm()">
            <h2>Iniciar <br> Sesion</h2>
            <div class="inputs">
                <i class="bi bi-person"></i><input type="text" name="usuario" placeholder="Usuario">
            </div>
            <div class="inputs">
                <i class="bi bi-lock"></i><input type="password" name="contraseña" placeholder="Contraseña">
            </div>
            <div class="btn">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>
</body>

</html>