<?php
// Iniciamos sesión
session_start();
// Si no hay sesión activa, redirigimos al login
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- Título principal del sistema -->
<h1>Sistema de Biblioteca</h1>
<!-- Menú principal del sistema -->
<ul>
    <li><a href="libros/listar.php">Libros</a></li>
    <li><a href="usuarios/listar.php">Usuarios</a></li>
    <li><a href="prestamos/listar.php">Préstamos</a></li>
</ul>

</body>
</html>