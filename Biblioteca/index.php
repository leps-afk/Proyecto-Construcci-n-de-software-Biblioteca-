<?php
// iniciamos sesión para poder guardar datos del usuario
session_start();
// Conectamos a la base de datos
include("config/db.php");
// Verificamos si el formulario fue enviado
if ($_POST) {
    // Capturamos los datos ingresados por el usuario
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Consulta para verificar usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    // Ejecutamos la consulta
    $result = mysqli_query($conn, $sql);
     // Verificamos si existe el usuario
    if (mysqli_num_rows($result) > 0) {
        // Si el usuario existe, guardamos la sesión
        $_SESSION['user'] = $email;
        // Redirigimos al panel principal
        header("Location: dashboard.php");
    } else {
        // Si no existe, mostramos mensaje de error
        echo "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="login">
    <h2>Iniciar Sesión</h2>

    <form method="POST">
        <input type="email" name="email" placeholder="Correo" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>