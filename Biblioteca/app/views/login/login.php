<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Biblioteca</title>

    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
<div class="login-page">
<div class="login-container">

    <div class="login-icon">
        📚
    </div>

    <h1>Biblioteca</h1>

    <p>Iniciar sesión</p>

    <?php if(isset($_SESSION["error"])): ?>
        <div class="mensaje-error">
            <?= $_SESSION["error"]; ?>
        </div>
    <?php unset($_SESSION["error"]); endif; ?>

    <form method="POST" action="index.php?url=login/iniciarSesion">

        <label>Usuario</label>

        <input type="text"
               name="usuario"
               placeholder="Ingrese su usuario"
               required>

        <label>Contraseña</label>

        <input type="password"
               name="password"
               placeholder="Ingrese su contraseña"
               required>

        <button type="submit">
            Ingresar
        </button>

    </form>

</div>
</div>

</body>

</html>